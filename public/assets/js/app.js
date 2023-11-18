function deleteMessage(msg){
    let ans = confirm(msg);
    if(!ans){
        event.preventDefault();
    }
}
