<?php
class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('index');
	}
	public function submit()
	{
		$data="";
		$grade= $this->input->post('grade');
		$subject= $this->input->post('subject');
    $category = $this->input->post('category');
		$location= $this->input->post('location');
    $daysdata = $this->input->post('dayselection');
		$timings= $this->input->post('timings');

        $counter = array();
         $q = $this->db->get('filters')->result_array();
         if(!empty($q))
         {
         foreach ($q as $row) {
            $counter[$row['id']]=0;

            $classesvar = explode(',', $row['class']);
            $subjectsvar = explode(',',$row['subjects']);
            $daysvar = explode(',', $row['days']);
            $locationvar = explode(',', $row['location']);


         	if(in_array($grade,$classesvar))   // If searched grade available in this row
         	   $counter[$row['id']]++;

         	if(in_array($subject,$subjectsvar))    // searched subjects
         		$counter[$row['id']] += 7;

         	if($category === $row['category'])     // category
         		$counter[$row['id']]++;

          if(in_array($location,$locationvar))     // location
             $counter[$row['id']]+=3;

          if(!empty($daysdata))
          {
          foreach ($daysdata as $dayselected) {     // days
             if(in_array($dayselected,$daysvar))
             {
                $counter[$row['id']]++;
             }
             else if($row['days']==='All Days')
               $counter[$row['id']]++;
          }
         }

         	if($timings === $row['timings'] || $row['timings']==='Any Time between 9 AM to 9 PM')   //timings
         		$counter[$row['id']]++;
         }
       arsort($counter);
         foreach ($counter as $key => $keyvalue) {
            $q = $this->db->get('filters')->result_array();
         	if(!empty($q))
         	{
         		foreach ($q as $r) {
         			if(strval($key) === $r['id'])
         			{
         				$data[] = $r;
         			}
         		}
         	}
         }
     if(!empty($data))
      {
      	$this->load->view('viewall',array(
            'data' =>$data
      		));
      }
      else
      {
         echo ('hi');  // indication of error
      }
     }
	}

   public function show($id=-1,$choice='')
   {


      $data="";
      $counter = array();
         $q = $this->db->get('filters')->result_array();
         if(!empty($q))
         {
         foreach ($q as $row ) {
            $counter[$row['id']]=0;
            $subjectsvar=explode(',',$row['subjects']);
            if(in_array($choice, $subjectsvar))
               $counter[$row['id']]++;
         }
      }
        arsort($counter);
         foreach ($counter as $key => $keyvalue) {
            $q = $this->db->get('filters')->result_array();
            if(!empty($q))
            {
               foreach ($q as $r) {
                  if(strval($key) === $r['id'])
                  {
                     $data[] = $r;
                  }
               }
            }
         }

      $q= $this->db->where(array('id'=>$id))->get('filters')->result_array();
      $this->load->view('viewind',array(
         'tutor'=>$q,
         'data'=>$data
         ));
   }
//-----------for individual links to particular subjects on index.php------
   public function subject($choice='')
   {

    $data="";
      $counter = array();
         $q = $this->db->get('filters')->result_array();
         if(!empty($q))
         {
         foreach ($q as $row ) {
            $counter[$row['id']]=0;
            $subjectsvar=explode(',',$row['subjects']);
            if(in_array($choice, $subjectsvar))
               $counter[$row['id']]++;
         }
        arsort($counter);
         foreach ($counter as $key => $keyvalue) {
            $q = $this->db->get('filters')->result_array();
            if(!empty($q))
            {
               foreach ($q as $r) {
                  if(strval($key) === $r['id'])
                  {
                     $data[] = $r;
                  }
               }
            }
         }

      if(!empty($data))
      {
         $this->load->view('viewall',array(
            'data' =>$data
            ));
      }
      else
      {
         echo ('hi');
      }
     }
   }

   }
?>
