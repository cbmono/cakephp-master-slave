<?php
class AppModel extends Model {

  public function save($data = null, $validate = true, $fieldList = array()) {

    $this->setDataSource('master');
    $response = parent::save($data, $validate, $fieldList);
    $this->setDataSource('default');

    return $response;
  }

  
  public function updateAll($fields, $conditions = true) {

    $this->setDataSource('master');
    $response = parent::updateAll($fields, $conditions);
    $this->setDataSource('default');

    return $response;
  }


  public function delete($id = null, $cascade = true) {

    $this->setDataSource('master');
    $response = parent::delete($id, $cascade);
    $this->setDataSource('default');

    return $response;
  }
}