<?php
// created: 2017-07-26 12:59:14
$dictionary["rt_module_instructor_rt_module_student"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'rt_module_instructor_rt_module_student' => 
    array (
      'lhs_module' => 'rt_Module_Instructor',
      'lhs_table' => 'rt_module_instructor',
      'lhs_key' => 'id',
      'rhs_module' => 'rt_Module_Student',
      'rhs_table' => 'rt_module_student',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rt_module_instructor_rt_module_student_c',
      'join_key_lhs' => 'rt_module_instructor_rt_module_studentrt_module_instructor_ida',
      'join_key_rhs' => 'rt_module_instructor_rt_module_studentrt_module_student_idb',
    ),
  ),
  'table' => 'rt_module_instructor_rt_module_student_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'rt_module_instructor_rt_module_studentrt_module_instructor_ida' => 
    array (
      'name' => 'rt_module_instructor_rt_module_studentrt_module_instructor_ida',
      'type' => 'id',
    ),
    'rt_module_instructor_rt_module_studentrt_module_student_idb' => 
    array (
      'name' => 'rt_module_instructor_rt_module_studentrt_module_student_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rt_module_instructor_rt_module_studentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rt_module_instructor_rt_module_student_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rt_module_instructor_rt_module_studentrt_module_instructor_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rt_module_instructor_rt_module_student_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rt_module_instructor_rt_module_studentrt_module_student_idb',
      ),
    ),
  ),
);