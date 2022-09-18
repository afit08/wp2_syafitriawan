<?php

class model_kategori extends CI_Model
{
    public function data_foods_and_drinks()
    {
        return $this->db->get_where("input", array('kategori' => 'foods and drinks'));
    }

    public function data_fruits()
    {
        return $this->db->get_where("input", array('kategori' => 'fruits'));
    }

    public function data_home_living()
    {
        return $this->db->get_where("input", array('kategori' => 'home living'));
    }

    public function data_medical()
    {
        return $this->db->get_where("input", array('kategori' => 'medical'));
    }

    public function data_fashion_anak()
    {
        return $this->db->get_where("input", array('kategori' => 'fashion anak'));
    }

    public function data_otomotif()
    {
        return $this->db->get_where("input", array('kategori' => 'otomotif'));
    }

    public function data_hobby()
    {
        return $this->db->get_where("input", array('kategori' => 'hobby & olahraga'));
    }
}
