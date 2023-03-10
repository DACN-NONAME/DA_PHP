<?php
class User extends DB
{
    function getUserByID($user_id)
    {
        $user_id = mysqli_escape_string($this->conn, $user_id);
        $query = mysqli_query($this->conn, 'SELECT * FROM user WHERE id = ' . $user_id);
        $row = mysqli_fetch_assoc($query);
        if ($row) {
            return $row;
        }
        return null;
    }

    function getUserByEmail($email)
    {
        $email = mysqli_escape_string($this->conn, $email);
        $query = mysqli_query($this->conn, 'SELECT * FROM user WHERE email = ' . $email);
        $row = mysqli_fetch_assoc($query);
        if ($row) {
            return $row;
        }
        return null;
    }

    function login($email, $password)
    {
        $email = mysqli_escape_string($this->conn, $email);
        $password = sha1($password);
        $query = mysqli_query($this->conn, 'SELECT * FROM user WHERE email = "' . $email . '" AND password = "' . $password . '"');
        $row = mysqli_fetch_assoc($query);
        if ($row) {
            return $row;
        }
        return null;
    }


    function register($full_name, $email, $password, $phone, $address)
    {
        $full_name = mysqli_escape_string($this->conn, $full_name);
        $email = mysqli_escape_string($this->conn, $email);
        $password = md5($password);
        $phone = mysqli_escape_string($this->conn, $phone);
        $address = mysqli_escape_string($this->conn, $address);
        if ($this->getUserByEmail($email)) return false;

        $query = mysqli_query($this->conn, 'INSERT INTO user(full_name, email, password, phone, address) VALUES("' . $full_name . '", "' . $email . '", "' . $password . '", "' . $phone . '",, "' . $address . '")');
        if ($query) return mysqli_insert_id($this->conn);
        return false;
    }
}
