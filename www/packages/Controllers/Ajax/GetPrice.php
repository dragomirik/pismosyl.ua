<?php
/**
 * Created by PhpStorm.
 * User: Andriy
 * Date: 24.02.2015
 * Time: 14:06
 */

namespace Controllers\Ajax;


class Validator {
    public function run () {
        if (isset ($_GET ['jsonData'])) {
            $this->dataConvert();
            \Annex\Annex::showArray($this->jsonData);
            //$method = 'method_' . $_GET ['method'];
            //$this->$method ();
            $res = $this->validateOrder();
            \Annex\Annex::showArray($res);
        } else
            exit ('Access error!');
    }

    private function dataConvert() {
        $customerData = json_decode($_GET ['jsonData'], true);
        $services['surgutch']['id'] = $customerData['services']['surgutchId'];
        $services['smell']['id'] = $customerData['services']['smellId'];
        $services['meal']['id'] = $customerData['services']['mealId'];
        $services['burnt_edges']['id'] = $customerData['services']['burnt_edgesId'];
        $services['delivery'] = $customerData['services']['delivery'];

        $this->jsonData['services'] = $services;
        $this->jsonData['letter'] = $customerData['letter'];
        $this->jsonData['customerContacts'] = $customerData['customerContacts'];
    }

    private function validateOrder(){
        $orders = new \Models\Orders();
	    return $price = $orders->getCalcPrice(
		    $this->jsonData ['services'],
		    $this->jsonData ['letter']
	    );
    }
} 