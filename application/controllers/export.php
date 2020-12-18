<?php
	class Export extends MY_controller { 
		public function __construct() {
   			parent::__construct();
   		  $this->load->model('export_model');
    	}

    	public function index() {
        $data['title']    = 'Display FeedBack Data';
        $data['feedback'] = $this->export_model->getFeedbackList();
       //load feedback list for display data
        $this->load->view('users/feedbacklist', $data);
      
      }

      //create createXLS import data into excel
      public function createXLS() {
        $this->load->library('excel');

        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);

        $table_columns = array('Name', 'Email', 'FeedBack');
        $column = 0;

        foreach ($table_columns as $field) {
          $object->getActiveSheet()->setCellValueByColumnAndRow($column ++, 1, $field);
        }

         $feedbackInfo = $this->export_model->getFeedbackList();
        
        $excel_row = 2;

        foreach ($feedbackInfo as $row) {
          $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->name);
          $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->email);
          $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row++, $row->feedback);
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="feedback_Data_hits.xls"');
        $object_writer->save('php://output');
  
      }
	}//end of Export class...
?>