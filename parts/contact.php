<section class="contact">
  <div class="contact-contents">
    <div class="contact-explanation">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</div>
    <form class="contact-form">
      <label class="form-label">会社名</label>
      <input type="text" placeholder="Engress" class="form-text">
      <label class="form-label-top">氏名</label>
      <input type="text" placeholder="田中　太郎" class="form-text">
      <label class="form-label-top">メールアドレス</label>
      <input type="text" placeholder="example@example.com" class="form-text">
      <label class="form-label-top">電話番号</label>
      <input type="text" placeholder="01-2345-6789" class="form-text">
      <label class="form-label-radio">お問い合わせの種類を選択してください（<b>資料請求の方は資料請求を選択ください</b>）</label>
      <div class="form-radios">
        <label><input type="radio" name="contact-radio">商談のご相談</label>
        <label><input type="radio" name="contact-radio">サービスに関するお問い合わせ</label>
        <label><input type="radio" name="contact-radio">資料請求</label>
        <label><input type="radio" name="contact-radio">その他</label>
      </div>
      <label class="form-label-contact">お問い合わせ内容</label>
      <textarea class="textarea-contact" placeholder="入力して下さい"></textarea>
      <div class="privacy-policy-box"><a href="<?= Constants::CONTACT_URL ?>">プライバシーポリシー</a>に同意の上、送信ください。</div>
      <div class="privacy-policy-agree-box">
        <input type="checkbox" name="privacy-policy-agree" id="privacy-policy-agree">
        <label for="privacy-policy-agree">プライバシーポリシーに同意する</label>
      </div>
      <div class="btn-send-box">
      <button class="btn-send">送信する</button>
      </div>
    </form>
  </div>
</section>