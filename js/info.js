function checkSubmit(){
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var message = document.getElementById('message');
    var button = document.getElementById('btn_submit');

    var reg = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}.[A-Za-z0-9]{1,}$/;

    if(!name.value.match(/\S/g)){
        alert("名前を正しく入力してください。");
        return false;
    }
    if(!reg.test(email.value)){
        alert("メールアドレスを正しく入力してください。");
        return false;
    }
    if(!message.value.match(/\S/g)){
        alert("お問い合わせ内容を正しく入力してください。");
        return false;
    }

    if(window.confirm('この内容で送信します。よろしいでしょうか。')){
        //ボタンを無効化
        button.disabled = true;
        return true;
    }
    else{
        return false;
    }
}
