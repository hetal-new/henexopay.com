<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xdreampay extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		$this->load->view('xdreampay');
	}
	public function pay()
	{

		try {
			$this->form_validation->set_rules('amount','Amount','required');

			if ($this->form_validation->run() == FALSE)
				throw new Exception("Amount required.");
			$amount = $this->input->post("amount");
			$payload=array();
			$payload['name']="gajanand";
			$payload['phone']="9876543456";
			$payload['email']="test@gmail.com";
			$payload['amount']=$amount;

			$payload['return_url']="https://test.com";
			$payload['api_token']="kipteryry564646d4f6d4f64sdf64f6d4f89768hjjkhjksdf76876jkh983";

			$this->db->insert('transactions',$payload);
			$id = $this->db->insert_id();
			if($id > 0){
				$payload['txnid']=time()."_".$id;
				$response = $this->curlRequest("https://partner.xdreampay.com/api/create_order",$payload);
                if(!empty($response) && $response['txnid'] != ""){
					$this->db->where("id",$id)->update('transactions',array("txnid"=>$payload['txnid'],"status"=>"Completed"));
					redirect("https://partner.xdreampay.com/api/redirect?txnid=".$response['txnid']);
				}
			}


		}catch (\Exception $e){
			$this->load->view('xdreampay');
		}
		//$this->load->view('xdreampay');
	}

	function curlRequest($url, $params, $method = "POST")
	{
		$body = json_encode($params);
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$response = curl_exec($ch);
		/*$error_msg = curl_error($ch);
		//echo 'Here';
		print_r($error_msg);die;*/
		curl_close($ch);
		return $response;

	}
}
