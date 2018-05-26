<?php

  class Pages extends CI_Controller
  {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
    }



    public function view ($page= 'index'){


      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }

      $data['title']=ucfirst($page);
      $data['error'] ='';
      if($page=='imgpro'){

        $config['upload_path']          = './assets/images/users/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|doc';
        $config['max_size']             = 1000;
        $config['max_width']            = 1300;
        $config['max_height']           = 1024;
        $config['file_name'] = $this->session->userdata('user_id');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $data['error'] =  $this->upload->display_errors();
            $this->load->view('common/header',$data);
            $this->load->view('pages/'.'index.php', $data);
            $this->load->view('common/footer');
        }
        else
        {
            $d =   $this->upload->data();
            $this->Post_model->set_image($d['file_name']);
            $data['error'] ="";
            $this->session->set_userdata('user_img',$d['file_name']);
            $this->load->view('common/header',$data);
            $this->load->view('pages/'.'index', $data);
            $this->load->view('common/footer');


        }
        return ;
      }
      else if($page=='startquiz'){
        $qn=$this->input->post('quizno');
        $data['quiz']= $this->Post_model->get_20quiz($qn);
      }
      else if($page=='addquiz'){
        $qn=$this->input->post('quizno');
        $data['quizno']= $qn;
        $data['quiz']= $this->Post_model->get_quiz($qn);

      }
      else if($page=='submitquiz'){
        $qn=$this->input->post('quizno');
        $data['quizno']= $qn;
        $page='addquiz';
        $this->Post_model->set_addquiz();
        $data['quiz']= $this->Post_model->get_quiz($qn);
      }
      else if($page=='deletequiz'){
        $qn=$this->input->post('quizno');
        $data['quizno']= $qn;
        $page='addquiz';
        $this->Post_model->delete_quiz($this->input->post('quizid'));
        $data['quiz']= $this->Post_model->get_quiz($qn);
      }
      else if($page=='quizscore'){
        $qn=$this->input->post('quizno');
        $time=$this->input->post('quiz_time');
        $data['quizno']= $qn;
        $i=1;
        $score=0;
        for($i=1; $i<=20 ; $i++) {
          $ans='ans'.$i;
          $cans='cans'.$i;
          if($this->input->post($ans)==$this->input->post($cans)){
            $score++;

          }

        }
        $data['point']=$score;
        $data['score']=round( $score*4.75 + ($time/4));

      }




      $this->load->view('common/header',$data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('common/footer');

    }


  }

 ?>
