<?php

class MY_Model extends CI_Model
{

    protected $table;
    protected $index;

    public function find(int $id)
    {
        $this->db->where($this->index, $id);

        $records = $this->db->get($this->table)->result_object();

        return $records ? reset($records) : null;
    }

    public function all()
    {
        return $this->db->get($this->table)->result_object();
    }

    public function save(array $data)
    {
        if (isset($data[$this->index])) {
            return $this->update($data);
        }

        return $this->insert($data);
    }

    public function delete(int $id)
    {
        var_dump("Deletando os dados do registro de {$this->index} = $id da tabela {$this->table}");

//        $this->db->where($this->index, $id);
//
//        return $this->db->delete($this->table);
    }

    private function insert(array $data)
    {
        var_dump("Inserindo os seguintes dados na tabela {$this->table}:");
        var_dump($data);

        //return $this->db->insert($this->table, $data);
    }

    private function update(array $data)
    {
        var_dump("Editando os seguintes dados do registro de {$this->index} = {$data[$this->index]} na tabela {$this->table}:");
        var_dump($data);

//        $this->db->where($this->index, $data[$this->index]);
//
//        return $this->db->update($this->table, $data);
    }

}
