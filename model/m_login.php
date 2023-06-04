<?php

class User
{
    private $username;
    private $password;
    private $email;
    private $telepon;
    private $fotoPath;
    private $mysqli;

    public function __construct()
    {
        include('koneksi.php');
        $this->mysqli = $mysqli;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setTelepon($telepon)
    {
        $this->telepon = $telepon;
    }

    public function getTelepon()
    {
        return $this->telepon;
    }

    public function setFotoPath($fotoPath)
    {
        $this->fotoPath = $fotoPath;
    }

    public function getFotoPath()
    {
        return $this->fotoPath;
    }

    public function login()
    {
        $sanitized_username = mysqli_real_escape_string($this->mysqli, $this->getUsername());
        $sanitized_password = mysqli_real_escape_string($this->mysqli, $this->getPassword());

        $query = "SELECT * FROM user WHERE username = '$sanitized_username' AND password = '$sanitized_password'";
        $result = mysqli_query($this->mysqli, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            return true;
        }

        return false;
    }

    public function signup(User $user)
    {
        $query = "INSERT INTO user (username, password, email, telepon) VALUES (?, ?, ?, ?)";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ssss", $user->getUsername(), $user->getPassword(), $user->getEmail(), $user->getTelepon());
        $stmt->execute();
        $stmt->close();
    }

    public function update(User $user)
    {
        $query = "UPDATE user SET password=?, email=?, telepon=? WHERE username=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ssss", $user->getPassword(), $user->getEmail(), $user->getTelepon(), $user->getUsername());
        $stmt->execute();
        $stmt->close();
    }

    public function delete(User $user)
    {
        session_start();
        $username = $_SESSION['username'];
        $folder = "../images/";

        $filename1 = "$username.png";
        $filename2 = "$username.jpg";

        $path1 = $folder . $filename1;
        $path2 = $folder . $filename2;

        if (file_exists($path1)) {
            unlink($path1);
            echo "File berhasil dihapus: " . $filename1 . "<br>";
        }

        if (file_exists($path2)) {
            unlink($path2);
            echo "File berhasil dihapus: " . $filename2 . "<br>";
        }

        $username = $user->getUsername();
        $query = "DELETE FROM user WHERE username = ?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->close();

        $query = "DELETE FROM task WHERE username = ?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->close();
    }
}
