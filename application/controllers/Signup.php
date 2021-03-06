<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $this->load->model(array('front/Signup_model'));
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
        //$this->load->helper('server_root');
        //$this->removeCache();
    }
    function index()
    {

        $data['title'] = 'Sign Up';    
        $data['active'] = 'signup';

        $this->load->view('front/header_view', $data);
        //$this->load->view('front/nav_view', $data);
        $this->load->view('front/signup_view', $data);
        $this->load->view('front/footer_view', $data); 
        

    }

    function fill_sub()
    {
       $type = $this->input->post('type');

       if ( $type == 1) {

        echo '<div class="form-group">'.
              form_error("name").'
            <label class="sr-only" >Name of the Agency</label>
            <input type="text" name="name" class="form-control login-email" placeholder="Name of the Agency" value="'.set_value("name").'">
        </div>
        <div class="form-group">'.
       form_error("address").'
            <label class="sr-only" >Address</label>
            <input type="text" name="address" class="form-control login-email" placeholder="Address" value="'.set_value("address").'">
        </div>

        <div class="form-group">'.
        form_error("director").'
            <label class="sr-only" >Name of Director</label>
            <input type="text" name="director" class="form-control login-email" placeholder="Name of Director" value="'.set_value("director").'">
        </div>
        <div class="form-group">'.
        form_error("phone").'
            <label class="sr-only" >Phone Number</label>
            <input type="text" name="phone" class="form-control login-email txtboxToFilter" placeholder="Phone Number" value="'.set_value("phone").'">
        </div>
        <div class="form-group">'.
        form_error("email").'
            <label class="sr-only" for="signup-email">Your email</label>
            <input id="signup-email" name="email" type="email" class="form-control " placeholder="Your email" value="'.set_value("email").'">
        </div>
        <input type="hidden" name="grabar" value="si"/>
        <input type="hidden" name="ty" value="'.$type.'"/>
        <button type="submit" class="btn btn-block btn-cta-primary">Sign up</button>
        <p class="note">By signing up, you agree to our terms of services and privacy policy.</p>
        <p class="lead">Already have an account? <a class="login-link" id="login-link" href="'.base_url().'login'.'">Log in</a></p>
         <script language="JavaScript" type="text/javascript">

        
                 $(".txtboxToFilter").keydown(function (e) {
                                              // Allow: backspace, delete, tab, escape, :, enter and .
                                              if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110,187,189, 190, 58]) !== -1 ||
                                                   // Allow: Ctrl+A, Command+A
                                                  (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
                                                   // Allow: home, end, left, right, down, up
                                                  (e.keyCode >= 35 && e.keyCode <= 40)) {
                                                       
                                                       return;
                                              }
                                              // Ensure that it is a number and stop the keypress
                                              if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                                                  e.preventDefault();
                                              }
                                          });

                




            </script>';




           
       }elseif ($type == 2) {

        echo '<div class="form-group">'.
              form_error("name").'
            <label class="sr-only" >Name of the Daycare</label>
            <input type="text" name="name" class="form-control login-email" placeholder="Name of the Daycare" value="'.set_value("name").'">
        </div>
        <div class="form-group">'.
       form_error("address").'
            <label class="sr-only" >Address</label>
            <input type="text" name="address" class="form-control login-email" placeholder="Address" value="'.set_value("address").'">
        </div>

        <div class="form-group">'.
        form_error("dirname").'
            <label class="sr-only" >Name of Director</label>
            <input type="text" name="dirname" class="form-control login-email" placeholder="Name of Director" value="'.set_value("dirname").'">
        </div>
        <div class="form-group">'.
        form_error("phone").'
            <label class="sr-only" >Phone Number</label>
            <input type="text" name="phone" class="form-control login-email txtboxToFilter" placeholder="Phone Number" value="'.set_value("phone").'">
        </div>
        <div class="form-group">'.
        form_error("children").'
            <label class="sr-only" >Number of children</label>
            <input type="number" name="children" min="0" class="form-control login-email " placeholder="Number of Children" value="'.set_value("children").'">
        </div>

        <div class="form-group">'.
        form_error("owner").'
            <label class="sr-only" >Owner</label>
            <input type="text" name="owner" class="form-control login-email" placeholder="Owner" value="'.set_value("owner").'">
        </div>
        <div class="form-group">'.
        form_error("email").'
            <label class="sr-only" for="signup-email">Your email</label>
            <input id="signup-email" name="email" type="email" class="form-control " placeholder="Your email" value="'.set_value("email").'">
        </div>
        <input type="hidden" name="grabar" value="si"/>
             <input type="hidden" name="ty" value="'.$type.'"/>
        <button type="submit" class="btn btn-block btn-cta-primary">Sign up</button>
        <p class="note">By signing up, you agree to our terms of services and privacy policy.</p>
        <p class="lead">Already have an account? <a class="login-link" id="login-link" href="'.base_url().'login'.'">Log in</a></p>

        <script language="JavaScript" type="text/javascript">

        
                 $(".txtboxToFilter").keydown(function (e) {
                                              // Allow: backspace, delete, tab, escape, :, enter and .
                                              if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110,187,189, 190, 58]) !== -1 ||
                                                   // Allow: Ctrl+A, Command+A
                                                  (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
                                                   // Allow: home, end, left, right, down, up
                                                  (e.keyCode >= 35 && e.keyCode <= 40)) {
                                                       
                                                       return;
                                              }
                                              // Ensure that it is a number and stop the keypress
                                              if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                                                  e.preventDefault();
                                              }
                                          });

                




            </script>

        ';



           
       }elseif ($type == 3) {




        echo '<div class="form-group">'.
              form_error("name").'
            <label class="sr-only" >Name</label>
            <input type="text" name="name" class="form-control login-email" placeholder="Name" value="'.set_value("name").'">
        </div>
        <div class="form-group">'.
       form_error("address").'
            <label class="sr-only" >Address</label>
            <input type="text" name="address" class="form-control login-email" placeholder="Address" value="'.set_value("address").'">
        </div>

        <div class="form-group">'.
        form_error("birthdate").'
            <label class="sr-only" >Date of birth</label>
            <input id="datepicker" type="text" name="birthdate" class="form-control login-email" placeholder="Date of birth" value="'.set_value("birthdate").'">
        </div>

        <div class="form-group">'.
        form_error("phone").'
            <label class="sr-only" >Phone Number</label>
            <input type="text" name="phone" class="form-control login-email txtboxToFilter" placeholder="Phone Number" value="'.set_value("phone").'">
        </div>

        <div class="form-group">'.

        form_error("gender").'

         <select class="form-control" name="gender" id="gender">
            <option value="-1">
               Select Gender
            </option> 
             <option value="1">
                Male
                </option>  
            <option value="0">
                Female
            </option> 
         </select>
         </div>

        <div class="form-group">'.
        form_error("email").'
            <label class="sr-only" for="signup-email">Your email</label>
            <input id="signup-email" name="email" type="email" class="form-control " placeholder="Your email" value="'.set_value("email").'">
        </div>
        <input type="hidden" name="grabar" value="si"/>
             <input type="hidden" name="ty" value="'.$type.'"/>
        <button type="submit" class="btn btn-block btn-cta-primary">Sign up</button>
        <p class="note">By signing up, you agree to our terms of services and privacy policy.</p>
        <p class="lead">Already have an account? <a class="login-link" id="login-link" href="'.base_url().'login'.'">Log in</a></p>

        <script language="JavaScript" type="text/javascript">

        
                 $(".txtboxToFilter").keydown(function (e) {
                                              // Allow: backspace, delete, tab, escape, :, enter and .
                                              if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110,187,189, 190, 58]) !== -1 ||
                                                   // Allow: Ctrl+A, Command+A
                                                  (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
                                                   // Allow: home, end, left, right, down, up
                                                  (e.keyCode >= 35 && e.keyCode <= 40)) {
                                                       
                                                       return;
                                              }
                                              // Ensure that it is a number and stop the keypress
                                              if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                                                  e.preventDefault();
                                              }
                                          });

                            $("#datepicker").datepicker({
                                dateFormat: "mm/dd/yy",
                                maxDate:  "01/31/1997"
                            });

       

                




            </script>

        ';
          

       }

    }

    function create_subscription()

    {

        if(isset($_POST['grabar']) and $_POST['grabar'] == 'si' and $_POST['ty'] == 1)
        {

            //SI EXISTE EL CAMPO OCULTO LLAMADO GRABAR CREAMOS LAS VALIDACIONES
                                    
            $this->form_validation->set_rules('name','Name','required|trim|max_length[250]');
             $this->form_validation->set_rules('phone','Phone Number','required|trim|max_length[45]');
              $this->form_validation->set_rules('address','Address','required|trim|max_length[250]');
                $this->form_validation->set_rules('director','Director','required|trim|max_length[250]');
                 
                  $this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email|is_unique[users.email]');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

          
          
            if($this->form_validation->run()==FALSE)
            {
                $this->index();
            }else{
                
                $name = $this->input->post('name');
                $phone = $this->input->post('phone');
                $address = $this->input->post('address');
                $director = $this->input->post('director');
                $email = $this->input->post('email');
                $password ='1234567';
                $pw = md5($password); $id_rol = 2;
                


                                        
                //ENVÍAMOS LOS DATOS AL MODELO CON LA SIGUIENTE LÍNEA
                //$id_user = $this->Signup_model->new_user($email,$pw,$id_rol);
                //$id_agency = $this->Signup_model->new_agency($name,$phone,$address,$director,$id_user);

                
                //redirect(base_url().'signup');
                 $data['title'] = 'Sign Up';    
                    $data['name'] = $name;
                    $data['phone'] = $phone;
                     $data['address'] = $address;
                      $data['director'] = $director;
                       $data['email'] = $email;
                       $data['action'] = 'https://www.paypal.com/cgi-bin/webscr';
                



                    $this->load->view('front/header_view', $data);
                    //$this->load->view('front/nav_view', $data);
                    $this->load->view('front/signup_pp_view', $data);
                    $this->load->view('front/footer_view', $data); 

                
        }


        }elseif (isset($_POST['grabar']) and $_POST['grabar'] == 'si' and $_POST['ty'] == 2) {

             //SI EXISTE EL CAMPO OCULTO LLAMADO GRABAR CREAMOS LAS VALIDACIONES
                                    
            $this->form_validation->set_rules('name','Name','required|trim|max_length[250]');
             $this->form_validation->set_rules('phone','Phone Number','required|trim|max_length[45]');
              $this->form_validation->set_rules('address','Address','required|trim|max_length[250]');
                $this->form_validation->set_rules('dirname','Director','required|trim|max_length[250]');
                $this->form_validation->set_rules('children','Number of Children','required|trim|is_natural_no_zero');
                $this->form_validation->set_rules('owner','Owner','required|trim|max_length[250]');
                 
                  $this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email|is_unique[users.email]');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

          
          
            if($this->form_validation->run()==FALSE)
            {
                $this->index();
            }else{
                
                $name = $this->input->post('name');
                $phone = $this->input->post('phone');
                $address = $this->input->post('address');
                $director = $this->input->post('dirname');
                $children = $this->input->post('children');
                $owner = $this->input->post('owner');
                $email = $this->input->post('email');
                $password ='1234567';
                $pw = md5($password); $id_rol = 3;
                


                                        
                //ENVÍAMOS LOS DATOS AL MODELO CON LA SIGUIENTE LÍNEA
                //$id_user = $this->Signup_model->new_user($email,$pw,$id_rol);
                //$id_agency = $this->Signup_model->new_agency($name,$phone,$address,$director,$id_user);

                
                //redirect(base_url().'signup');
                 $data['title'] = 'Sign Up';    
                    $data['name'] = $name;
                    $data['phone'] = $phone;
                     $data['address'] = $address;
                      $data['director'] = $director;
                       $data['children'] = $children;
                        $data['owner'] = $owner;
                       $data['email'] = $email;
                       $data['type'] = $this->input->post('ty');
                       $data['action'] = 'https://www.paypal.com/cgi-bin/webscr';
                



                    $this->load->view('front/header_view', $data);
                    //$this->load->view('front/nav_view', $data);
                    $this->load->view('front/signup_pp_view', $data);
                    $this->load->view('front/footer_view', $data); 

                
        }




         
        }elseif (isset($_POST['grabar']) and $_POST['grabar'] == 'si' and $_POST['ty'] == 3) {


                //SI EXISTE EL CAMPO OCULTO LLAMADO GRABAR CREAMOS LAS VALIDACIONES
                                    
            $this->form_validation->set_rules('name','Name','required|trim|max_length[250]');
             $this->form_validation->set_rules('phone','Phone Number','required|trim|max_length[45]');
              $this->form_validation->set_rules('address','Address','required|trim|max_length[250]');
                $this->form_validation->set_rules('birthdate','Date of birth','required|trim|max_length[45]');
                  $this->form_validation->set_rules('gender',"Gender",'required|callback_check_default2');

                 
                  $this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email|is_unique[users.email]');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            $this->form_validation->set_message('check_default2', 'Please select a Gender');
          
          
            if($this->form_validation->run()==FALSE)
            {
                $this->index();
            }else{

                $name = $this->input->post('name');
                $phone = $this->input->post('phone');
                $address = $this->input->post('address');
                $birthdate = $this->input->post('birthdate');
                $gender = $this->input->post('gender');
                $email = $this->input->post('email');


                $date = new DateTime($birthdate);
                $bdate =$date->format('Y-m-d');

                $password ='1234567';
                $pw = md5($password); $id_rol = 3;
                
                 $data['title'] = 'Sign Up';    
                    $data['name'] = $name;
                    $data['phone'] = $phone;
                     $data['address'] = $address;
                      $data['birthdate'] = $bdate;
                       $data['gender'] = $gender;
                       $data['email'] = $email;
                       $data['type'] = $this->input->post('ty');
                       $data['action'] = 'https://www.paypal.com/cgi-bin/webscr';
                



                    $this->load->view('front/header_view', $data);
                    //$this->load->view('front/nav_view', $data);
                    $this->load->view('front/signup_pp_view', $data);
                    $this->load->view('front/footer_view', $data); 

                
        }


            
         
        }

    }

     function create_pp_subscription()

    {

            //SI EXISTE EL CAMPO OCULTO LLAMADO GRABAR CREAMOS LAS VALIDACIONES
               
           if($this->session->userdata('a_type') == 1)
        {
                
                $name = $this->session->userdata('a_name');
                $phone = $this->session->userdata('a_phone');
                 $address = $this->session->userdata('a_address');
                 $director = $this->session->userdata('a_director');
                $email = $this->session->userdata('a_email');
                

                $password ='1234567';
                $pw = md5($password); $id_rol = 2;
                


                                        
                //ENVÍAMOS LOS DATOS AL MODELO CON LA SIGUIENTE LÍNEA
                $id_user = $this->Signup_model->new_user($email,$pw,$id_rol);
                $id_agency = $this->Signup_model->new_agency($name,$phone,$address,$director,$id_user);

                if ($id_agency != Null) {

                        echo '<script type="text/javascript">'; 
                        echo 'alert("Successful Registration!");'; 
                        echo 'window.location.href = "'.base_url().'signup";';
                        echo '</script>';
                                            
                }
                //redirect(base_url().'signup');


            }elseif ($this->session->userdata('a_type') == 2) {

                $name = $this->session->userdata('a_name');
                $phone = $this->session->userdata('a_phone');
                 $address = $this->session->userdata('a_address');
                 $director = $this->session->userdata('a_director');
                 $children = $this->session->userdata('a_children');
                 $owner = $this->session->userdata('a_owner');
                $email = $this->session->userdata('a_email');

                $type_emp = 1;
                

                $password ='1234567';
                $pw = md5($password); $id_rol = 3;
                


                                        
                //ENVÍAMOS LOS DATOS AL MODELO CON LA SIGUIENTE LÍNEA
                $id_user = $this->Signup_model->new_user($email,$pw,$id_rol);
                $id_daycare = $this->Signup_model->new_daycare($name,$phone,$address,$children,$owner);
                $id_administrator = $this->Signup_model->new_administrator($id_daycare,$id_user,$type_emp,$director);

                 if ($id_daycare != Null) {

                        echo '<script type="text/javascript">'; 
                        echo 'alert("Successful Registration!");'; 
                        echo 'window.location.href = "'.base_url().'signup";';
                        echo '</script>';
                                            
                }


                
                
            }elseif ($this->session->userdata('a_type') == 3) {


                $name = $this->session->userdata('a_name');
                $phone = $this->session->userdata('a_phone');
                 $address = $this->session->userdata('a_address');
                 $birthdate = $this->session->userdata('a_birthdate');
                 $gender = $this->session->userdata('a_gender');

                $email = $this->session->userdata('a_email');

                $type_emp = 2;
                

                $password ='1234567';
                $pw = md5($password); $id_rol = 5;
                


                                        
                //ENVÍAMOS LOS DATOS AL MODELO CON LA SIGUIENTE LÍNEA
                $id_user = $this->Signup_model->new_user($email,$pw,$id_rol);
                $id_employee = $this->Signup_model->new_employee($id_user,$type_emp,$name,$phone,$address,$birthdate,$gender);

                 if ($id_employee != Null) {

                        echo '<script type="text/javascript">'; 
                        echo 'alert("Successful Registration!");'; 
                        echo 'window.location.href = "'.base_url().'signup";';
                        echo '</script>';
                                            
                }

                
                
            }
                

                
        


        

    }

    function check_default2($post_string)
    {
      return $post_string == '-1' ? FALSE : TRUE;
    }




}