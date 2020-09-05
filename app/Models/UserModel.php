<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
  protected $table = 'tbl_users';
  protected $allowedFields = ['nama', 'email', 'jenis_kelamin', 'tgl_lahir','desa', 'alamat', 'user_level', 'password'];
  
  public function __construct() {
    parent::__construct();
  }
  
  public function find_by_email_pwd($email, $password) {
    $where  = ['email' => $email,'password' => $password];
    $result = $this->where($where)->get()->getRow();
    return $result;
  }
  
  public function deleteByid($id) {
    $this->db->delete(['id' => $id]);
  }

  public function updateById($data, $id) {
    return $this->db->update($data. ['id' => $id]);
  }

  
}


?>