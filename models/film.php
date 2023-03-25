<?php
class Film extends DB
{
  function GetFilms($page = 1, $keyword = '')
  {
    if ($keyword != '') $keyword = 'WHERE MATCH(F.name) AGAINST("' . mysqli_escape_string($this->conn, $keyword) . '")';
    else $keyword = '';

    $a = mysqli_query($this->conn, 'SELECT F.*, C.name AS country_name, R.name AS rated_name FROM film F LEFT JOIN country C ON F.country_id = C.id LEFT JOIN rated R ON F.rated_id = R.id ' . $keyword . ' ORDER BY F.id DESC ' . $this->Offset($page));
    $b = array();
    if (mysqli_num_rows($a))
      while ($row = mysqli_fetch_assoc($a)) {
        $b = array_merge($b, array($row));
      }
    mysqli_free_result($a);
    return $b;
  }

  function GetFilmsByCategoryId($page = 1, $category_id)
  {
    $a = mysqli_query($this->conn, 'SELECT F.*, C.name AS country_name, R.name AS rated_name FROM category_film CF LEFT JOIN film F ON CF.film_id = F.id LEFT JOIN country C ON F.country_id = C.id LEFT JOIN rated R ON F.rated_id = R.id WHERE CF.category_id = ' . $category_id . ' ORDER BY F.id DESC ' . $this->Offset($page));
    $b = array();
    if (mysqli_num_rows($a))
      while ($row = mysqli_fetch_assoc($a)) {
        $b = array_merge($b, array($row));
      }
    mysqli_free_result($a);
    return $b;
  }

  function GetFilm($id)
  {
    $id = mysqli_escape_string($this->conn, $id);
    $a = mysqli_query($this->conn, 'SELECT F.*, C.name AS country_name, R.name AS rated_name FROM film F LEFT JOIN country C ON F.country_id = C.id LEFT JOIN rated R ON F.rated_id = R.id WHERE F.id = ' . $id);
    if (mysqli_num_rows($a))
      while ($row = mysqli_fetch_assoc($a))
        $b = $row;
    else $b = false;
    mysqli_free_result($a);
    return $b;
  }

  public function GetCount()
  {
    $total = mysqli_query($this->conn, "SELECT COUNT(id) AS total FROM film");
    $total = mysqli_fetch_assoc($total)['total'];
    return $total;
  }
}
