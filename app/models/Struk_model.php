<?php

class Struk_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBarang($id_barang)
    {
        $this->db->query('SELECT * from barang where id_barang=:id_barang');
        $this->db->bind('id_barang', $id_barang);
        $this->db->execute();
        return $this->db->single();
    }

    public function addItemToStruk($barang, $id_nota)
    {
        $this->db->query('INSERT INTO detail_nota values (:id_nota,:id_barang) ');
        $this->db->bind('id_barang', $barang['id_barang']);
        $this->db->bind('id_nota', $id_nota);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getItemStruk($id_nota)
    {
        $query = "SELECT detail_nota.id_barang, barang.nama_barang, barang.harga_barang ,COUNT(detail_nota.id_barang) AS jumlah_barang, SUM(barang.harga_barang) AS total_harga
        FROM detail_nota
        JOIN barang ON barang.id_barang = detail_nota.id_barang
        WHERE detail_nota.id_nota =:id_nota
        GROUP BY detail_nota.id_barang;
        ";
        $this->db->query($query);
        $this->db->bind('id_nota', $id_nota);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getTotalStruk()
    {
        $this->db->query('SELECT count(id_nota) as jumlah_struk from nota');
        $this->db->execute();
        return $this->db->single();
    }

    public function deleteItemFromStruk($id_nota, $id_barang)
    {
        $this->db->query('DELETE from detail_nota where id_nota =:id_nota and id_barang=:id_barang');
        $this->db->bind('id_barang', $id_barang);
        $this->db->bind('id_nota', $id_nota);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function addDetailToStruk($input, $id_nota, $kembalian)
    {
        $this->db->query('UPDATE nota set total_harga=:total , uang=:uang , kembalian=:kembalian where id_nota=:id_nota');
        $this->db->bind('total', $input['total']);
        $this->db->bind('uang', $input['uang']);
        $this->db->bind('kembalian', $kembalian);
        $this->db->bind('id_nota', $id_nota);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getPegawai($id_nota)
    {
        $this->db->query('SELECT nama_pegawai from nota join pegawai on pegawai.id_pegawai = nota.id_pegawai where id_nota =:id_nota');
        $this->db->bind('id_nota', $id_nota);
        $this->db->execute();
        return $this->db->single();
    }

    public function getHargaStruk($id_nota)
    {
        $this->db->query('select sum(harga_barang) as detail_harga from detail_nota join barang on barang.id_barang = detail_nota.id_barang where id_nota =:id_nota');
        $this->db->bind('id_nota', $id_nota);
        $this->db->execute();
        return $this->db->single();
    }
    public function createStruk($id_pegawai)
    {
        $this->db->query('INSERT INTO nota values (NULL, :id_pegawai, null,null,null) ');
        $this->db->bind('id_pegawai', $id_pegawai);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getTotalPenjualan()
    {
        $query = "SELECT detail_nota.id_barang,nama_barang, count(detail_nota.id_barang) as jumlah_barang from detail_nota join barang on barang.id_barang = detail_nota.id_barang group by detail_nota.id_barang";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getStruk()
    {
        $this->db->query('SELECT * from nota order by id_nota desc limit 1');
        $this->db->execute();
        return $this->db->single();
    }

    public function getAllStruk()
    {
        $this->db->query('SELECT * from nota');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function deleteStruk($id_nota)
    {
        $this->db->query('DELETE from nota where id_nota=:id_nota');
        $this->db->bind('id_nota', $id_nota);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteDetail($id_nota)
    {
        $this->db->query('DELETE from detail_nota where id_nota=:id_nota');
        $this->db->bind('id_nota', $id_nota);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
