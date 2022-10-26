const confirmDeletion = (tableRow) => {
    const tableIdCel = tableRow.querySelector('.idCel');
    const tableTitleCel = tableRow.querySelector('.titleCel');
    const postData = {
        id: +tableIdCel.innerHTML,
        title: tableTitleCel.innerHTML
    }

    let deletePost = confirm(`Você realmente deseja apagar o post "${postData.title}" (id: ${postData.id})\nEsta ação não pode ser desfeita`);
    if(deletePost){
        document.location = `../src/php/posts/admin/controllerDelete.php?id=${postData.id}`;
    }
}

document.querySelectorAll('.btnDeletePost').forEach( (button) => {
    const tableRow = button.parentNode.parentNode;
    button.addEventListener('click', () => confirmDeletion(tableRow));
})