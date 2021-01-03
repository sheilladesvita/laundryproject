<?php
defined('BASEPATH') or exit('No direct script access allowed');

class order extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_service_item');
        $this->load->model('m_service');
        $this->load->model('m_customer');
        $this->load->model('m_member');
        $this->load->model('m_order');
    }

    public function index(){
        $data["active_link"] = "order";
        $data1['service'] = $this->m_service->getService()->result();
        $this->load->view('partials/header', $data);
        $this->load->view('pages/v_order',$data1);
        $this->load->view('partials/footer', $data);
    }

    function get_service_item(){
        $service_id = $this->input->post('id',TRUE);
        $data = $this->m_service_item->getServiceItemList($service_id)->result();
        echo json_encode($data);
    }

    function add_to_cart(){ //fungsi Add To Cart
        $data = array(
            'id'      => $this->input->post('id_serviceitem'),
            'qty'     => $this->input->post('qty'), 
            'price'   => $this->input->post('price'), 
            'name'    => $this->input->post('name_serviceitem'),
            'options' => array(
                'id_service' => $this->input->post('id_service'), 
                'name_service' => $this->input->post('name_service')
            )
        );
        $this->cart->insert($data);
        echo $this->show_cart(); //tampilkan cart setelah added
    }
 
    function show_cart(){ //Fungsi untuk menampilkan Cart
        $output = '';
        foreach ($this->cart->contents() as $items) {
            $output .='
                <tr>
                    <td class="text-center">'.$items['name'].'</td>
                    <td class="text-center">'.$items['options']['name_service'].'</td>
                    <td class="text-center">'.$items['price'].'</td>
                    <td class="text-center">'.$items['qty'].'</td>
                    <td class="text-center">'.'Rp '.number_format($items['subtotal']).'</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a	class="delete_cart btn btn-sm bg-default-blue text-default-white btn-blue-hover" id='.$items['rowid'].'><i class="fas fa-trash-alt mx-2"></i></a>
                        </div>
                    </td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th class="text-right" colspan="4">Total</th>
                <th class="text-center">'.'Rp '.number_format($this->cart->total()).'</th>
            </tr>
        ';
        return $output;
    }
 
    function load_cart() {
        echo $this->show_cart();
    }
 
    function delete_cart() {
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }

    function check_cart() {
        $output = array('success' => false);
        if(count($this->cart->contents()) > 0){
            $output = array('success' => true);
        }
        echo json_encode($output);
    }

    public function checkout() {
        $data["active_link"] = "checkout";
        $this->load->view('partials/header', $data);
        $this->load->view('pages/v_checkout');
        $this->load->view('partials/footer', $data);
    }
}

?>