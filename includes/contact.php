 <!-- ======= Contact Section ======= -->
 <br>
 <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                    <h2>Kontakt</h2>
                    <h3><span>Kontakt z nami</span></h3>
                    <p>Zapraszamy do kontaktu z nami, odpowiemy na Wasze wszystkie pytania.</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Nasz adres</h3>
                        <p>Traugutta 25, 90-113 Łódź</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Napisz do nas</h3>
                        <a href="mailto:ztk@ztkig.pl">ztk@ztkig.pl</a>             
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Zadzwoń do nas</h3>
                        <p>+48 606 368 161</p>              
                        </div>
                    </div>

                    </div>

                    <div class="col-md-12" style="text-align: center;"   data-aos="fade-up">
                    <div class="row map"   data-aos-delay="100">

                    <div class="col-lg ">           
                                            
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1506.2127849925014!2d19.463301134944352!3d51.76785437928824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4410d5a9f3b27974!2sTextilimpex%20Sp.%20z%20o.o.!5e1!3m2!1spl!2spl!4v1622044629885!5m2!1spl!2spl"
                                width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            
                            
                            
                                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                            
                        
                    </div>
<!--
                    <div class="col-sm" >
                        <form  method="POST" class="php-email-form">                        
                                <div class="row" >
                                    <div class="col form-group" >
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Twoje nazwisko" required>
                                    </div>

                                    <div class="col form-group">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Twój adres Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Temat" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Treść" required></textarea>
                                </div>
                                
                                <div class="text-center">
                                    <button  type="submit" name="SendEmail">Wyślij wiadomość</button>
                                </div>                                
                        </form>
                    </div>
  --->  
                    <div class="col-sm" >
                    <form action="" method="POST"> 
                        <div class="php-email-form">                
                            <div class="row" >
                                <div class="col form-group" >
                                    <input type="text" name="Name" class="form-control" placeholder="Twoje nazwisko" required>
                                </div>

                                <div class="col form-group">
                                    <input type="text" name="Email" class="form-control"  placeholder="Twój adres Email" required>    
                                </div>                

                            </div>
                            <div class="row" >
                                <div class="col form-group" >
                                    <input type="text" name="subject" class="form-control"  placeholder="Temat" required>        
                                </div>
                            </div>

                            

                            <div class="row" >
                                <div class="col form-group" >
                                    <textarea class="form-control" rows="5" name="EmailBody" rows="5" placeholder="Treść" required></textarea>
                                </div>                            
                            </div>

                            <div class="my-3">
                            <div class="loading">Ładuje</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Dziękujemy, Twoja wiadomość zostałą wysłana!</div>
                            </div>

                        
                            
                            <button type="submit" name="SendEmail">Wyślij</button>
    
    
    
                        </div>                
    
                     </form>
                    </div>

                    <?php
                    
                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\SMTP;
                        use PHPMailer\PHPMailer\Exception;

                        require('PHPMailer/Exception.php');
                        require('PHPMailer/SMTP.php');
                        require('PHPMailer/PHPMailer.php');
                                
                    if(isset($_POST['SendEmail'])){

                        $name = $_POST['Name'];
                        $email = $_POST['Email'];
                        $bodyEmail = $_POST['EmailBody'];

                        $mail = new PHPMailer(true);

                         try {

                                $mail->SMTPDebug = false; // SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                $mail->isSMTP();                                            //Send using SMTP
                                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                $mail->Username   = 'smyhail02@gmail.com';                     //SMTP username
                                $mail->Password   = 'Ztkigztk!2';                               //SMTP password
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                            
                                $mail->setFrom('from@example.com', 'Mailer');
                                $mail->addAddress( $email,  $email);     //Add a recipient

                                $mail->isHTML(true);                                  //Set email format to HTML
                                $mail->Subject = 'Kontakt z Nami';
                                $mail->Body    = "Autor: $name <br> Wysłane z adresu: $email <br> Treść: <br> <br>  $bodyEmail ";
                            

                                $mail->send();
                              // echo "<script>window.alert('Wiadomość zostałą wysłana');</script>";                              
                            } catch (Exception $e) {
                              //  echo "<script>window.alert('Wiadomość niestety nie zostałą wysłana. Mailer Error: {$mail->ErrorInfo}') ;</script>";
                            // echo "<script>Alert(' Message could not be sent. Mailer Error: {$mail->ErrorInfo}') </script>";
                            }  



                        }
    
    
    
    
    ?>

                    </div>
                    </div>

                    

                    

                </div>
                </section><!-- End Contact Section -->