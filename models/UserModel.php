<?php
class UserModel extends BaseModel
{
    const TABLE = 'users';

    public function getAll($select = ["*"])
    {
        return $this->findAll(self::TABLE, $select);
    }

    public function getById($id, $select = ["*"])
    {
        return $this->findById(self::TABLE, $id, $select);
    }

    public function deleteById($id)
    {
        return $this->delete(self::TABLE, $id);
    }

    public function updateById($id, $data)
    {
        return $this->update(self::TABLE, $id, $data);
    }

    public function store($data)
    {
        return $this->create(self::TABLE, $data);
    }

    public function login($username, $password)
    {
        $table = self::TABLE;
        $sql = "SELECT * FROM ${table} WHERE username='${username}'";
        $result = $this->_query($sql);
        $result = $result['data'];
        if (count($result) === 0) {
            return null;
        }
        if($result[0]['password'] !== $password) {
           
            return [
                "status" => false,
                "message" => "Invalid password"
            ];
        }
        return [
            "status" => true,
            "data" => $result[0]
        ];
    }

    public function register($username, $password, $confirmpassword, $email, $phone){
        $table = self::TABLE;
        $sql = "SELECT * FROM ${table} WHERE username='${username}' OR email='${email}' OR phone='${phone}'";
        $result = $this->_query($sql);
        $result = $result['data'];
        if (count($result) > 0) {
            return null;
        }
        if($password !== $confirmpassword) {
            return null;
        }
        $dataUser = [
            "username" => $username,
            "email" => $email,
            "password" => $password,
            "phone" => $phone
        ];
        return $this->create(self::TABLE, $dataUser);
    }
}
