<?php $this->layout('layouts/main', ['cssLink'=>'/css/contact.css','title' => 'Liên hệ']) ?>


<div class="contact-container">
    <div class="contact-info">
        <div class="contact-detail">
            <img src="/imgs/logo.png" alt="logo">
            <div class="brand"><b>Quán cà phê Den Coffee</b></div>
            <div class="address">116A, 3/2, Xuân Khánh, Ninh Kiều, TP. Cần Thơ</div>
            <div class="time-info">Mở cửa: 6h00 - Đóng cửa: 23h00 tất cả các ngày trong tuần</div>
            <ul class="contact-icons">
                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8627139332!2d105.7701163140185!3d10.028185875301675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0882365af6c45%3A0xf6ea0ded1c802d3!2zMTE2YSDEkC4gMy8yLCBYdcOibiBLaMOhbmgsIE5pbmggS2nhu4F1LCBD4bqnbiBUaMahLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1650487203306!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="contact-form">
        <h3>Góp ý của bạn</h3>
        <form action="/lienhe" method="post">
            <span>Chúng tôi sẽ tiếp thu tất cả các ý kiến của các bạn để nâng cao chất lượng phục vụ của quán</span>
           
            <div class="input-grp">
                <div>
                    <label for="email">Email: </label>
                    <input data-type="email" type="text" name="email" id="email" placeholder="Nhập email">
                </div>
                <span class="field-mess">Vui lòng nhập đúng định dạng email!</span>
            </div>

            <div class="input-grp">
               <div>
                    <label for="content">Nội dung: </label>
                    <textarea placeholder="Nội dung góp ý" data-type="content" name="content" id="content" cols="30" rows="10"></textarea>
               </div>
               <span class="field-mess">Nội dung phải dài hơn 10 ký tự!</span>
            </div>
            
            <input name="submit" type="submit" value="Gửi" name="submit" id="contact-sumit">
        </form>
    </div>
    
</div>

<?php $this->push('scripts') ?>
<script>

    $(document).ready(()=>{

        var form = $('.contact-form form')
        form.find('input[type=submit]').click((e)=>{
            if(validation(form)) form.submit()
            else e.preventDefault()
        })

        focusInputHandel()
    })
    
    
</script>
<?php $this->end() ?>