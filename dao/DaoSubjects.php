<?php
require_once './dao/Conexao.php';

class DaoSubjects
{
    public function inclui(Subjects $subject)
    {
        $sql = 'insert into subjects (IdSubject, Name, NumberHour) values (?,?,?);';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $subject->getId());
        $pst->bindValue(2, $subject->getName());
        $pst->bindValue(3, $subject->getNumberHour());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function lista() 
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from subjects');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function exclui(Subjects $subject) {
        $sql = 'delete from subjects where IdSubject = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $subject->getId());
        if ($pst->execute()) {
            return $pst->rowCount();
        } else {
            return false;
        }
    }

    public function altera(Subjects $subject) {
        $sql = 'update subjects set Name = ?, NumberHour = ? where IdSubject = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $subject->getName());
        $pst->bindValue(2, $subject->getNumberHour());
        $pst->bindValue(3, $subject->getId());
        if ($pst->execute()) {
            return $pst->rowCount();
        } else {
            return false;
        }
    }
}
