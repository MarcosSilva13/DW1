<?php
require_once 'Conexao.php';

class DaoStudent
{
    public function inclui(Student $student)
    {
        $sql = 'insert into student (Ra, Name, Age, Cpf) values (?,?,?,?);';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $student->getRa());
        $pst->bindValue(2, $student->getName());
        $pst->bindValue(3, $student->getAge());
        $pst->bindValue(4, $student->getCpf());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function localiza($id) {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from student where Ra = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }


    public function lista() {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from student');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listaPersonalizada($id) {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select sub.Name, sub.NumberHour from subjects sub
        join studentsubjects sb on sb.Subjects_IdSubject = sub.IdSubject
        join student s on sb.Student_Ra = s.Ra
        where s.Ra = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function exclui(Student $student) {
        $sql = 'delete from student where Ra = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $student->getRa());
        if ($pst->execute()) {
            return $pst->rowCount();
        } else {
            return false;
        }
    }

    public function altera(Student $student) {
        $sql = 'update student set Name = ?, Age = ?, Cpf = ? where Ra = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $student->getName());
        $pst->bindValue(2, $student->getAge());
        $pst->bindValue(3, $student->getCpf());
        $pst->bindValue(4, $student->getRa());
        if ($pst->execute()) {
            return $pst->rowCount();
        } else {
            return false;
        }
    }
}
