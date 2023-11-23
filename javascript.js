function ConfirmaApagar(id, nome) {
    escolha = confirm("Deseja eliminar o registo com o id " + id + " com o nome " + nome + "?");
    if (escolha == 1) {
        location = "eliminar.php?id_user=" + id;
    } else {
        location = "entrou.php";
    }
}