function load(){
  // const pageContact = new PageContact();
  // pageContact.init();
}

function resize() {
  // const pageContact = new PageContact();
  // pageContact.responsiveView();
}

// function PageContact() {}

// PageContact.prototype.init = function(){
//   this.responsiveView();
//   this.addEvent();
// }

// PageContact.prototype.responsiveView = function(){
//   if(getWindowType() === WINDOW_TYPE_SP) {

//   }else{

//   }
// };

// PageContact.prototype.addEvent = function(){
//   const self = this;
//   $('.btn-send').on('click', function(){
//     if(self.inputCheckWithShowError()){
//       alert('入力内容に誤りがあります。');
//       return;
//     }
//     $('#mw_wp_form_mw-wp-form-2198 > form').submit();
//   });
// };

// /**
//  * 入力チェック・エラー表示
//  * 
//  * @returns 
//  */
// PageContact.prototype.inputCheckWithShowError = function(){
//   var retFlg = false;

//   // 会社名
//   if(this.execInputCheckWithShowError(`#${Constants.KEY_COMPANY_NAME}`, `${Constants.COMPANY}${Constants.INPUT_ERR_MSG}`)){
//     if(!retFlg){
//       retFlg = true;
//     }
//   }

//   // 氏名
//   if(this.execInputCheckWithShowError(`#${Constants.KEY_NAME}`, `${Constants.NAME}${Constants.INPUT_ERR_MSG}`)){
//     if(!retFlg){
//       retFlg = true;
//     }
//   }

//   // メールアドレス
//   if(this.execInputCheckWithShowError(`#${Constants.KEY_EMAIL}`, `${Constants.EMAIL}${Constants.INPUT_ERR_MSG}`)){
//     if(!retFlg){
//       retFlg = true;
//     }
//   }

//   // 電話番号
//   if(this.execInputCheckWithShowError(`#${Constants.KEY_PHONE_NUMBER}`, `${Constants.PHONE_NUMBER}${Constants.INPUT_ERR_MSG}`)){
//     if(!retFlg){
//       retFlg = true;
//     }
//   }

//   // お問い合わせの種類
//   if(this.execCheckWithShowError(`input[name="${Constants.KEY_PageContact_KINDS}"]:checked`, `${Constants.PageContact_KINDS}${Constants.SELECT_ERR_MSG}`, `#${Constants.KEY_PageContact_KINDS}s`)){
//     if(!retFlg){
//       retFlg = true;
//     }
//   }

//   // お問い合わせ内容
//   if(this.execInputCheckWithShowError(`#${Constants.KEY_PageContact_CONTENT}`, `${Constants.PageContact_CONTENT}${Constants.INPUT_ERR_MSG}`)){
//     if(!retFlg){
//       retFlg = true;
//     }
//   }

//   // プライバシーポリシー
//   if(this.execCheckWithShowError(`#${Constants.KEY_PRIVACY_POLICY_AGREE}-1:checked`, `${Constants.PRIVACY_POLICY_AGREE}${Constants.CHECK_ERR_MSG}`, `#${Constants.KEY_PRIVACY_POLICY_AGREE}-label`)){
//     if(!retFlg){
//       retFlg = true;
//     }
//   }

//   return retFlg;
// }

// /**
//  * 入力チェックとエラー表示実行
//  * 
//  * @param {*} selector セレクタ
//  * @param {*} msg エラーメッセージ
//  * @returns 
//  */
// PageContact.prototype.execInputCheckWithShowError = function(selector, msg){
//   if(!$(selector).val()){
//     if(!$(selector).next().hasClass(Constants.KEY_ERROR)){
//       $(selector).addClass(Constants.KEY_INPUT_ERROR);
//       $(selector).after(`<div class='${Constants.KEY_ERROR}'>${msg}</div>`);
//     }
//     return true;
//   }else{
//     if($(selector).next().hasClass(Constants.KEY_ERROR)){
//       $(selector).removeClass(Constants.KEY_INPUT_ERROR);
//       $(selector).next().remove();
//     }
//   }
//   return false;
// }

// /**
//  * 入力チェックとエラー表示実行（ラジオボタン・チェックボックス）
//  * 
//  * @param {*} selector セレクタ
//  * @param {*} msg エラーメッセージ
//  * @param {*} target 親要素のセレクタ
//  * @returns 
//  */
// PageContact.prototype.execCheckWithShowError = function(selector, msg, target){
//   if(!$(selector).val()){
//     if(!$(target).children().hasClass(Constants.KEY_ERROR)){
//       $(target).append(`<div class='${Constants.KEY_ERROR}'>${msg}</div>`);
//     }
//     return true;
//   }else{
//     $(target).find(`.${Constants.KEY_ERROR}`)[0].remove();
//   }
//   return false;
// }