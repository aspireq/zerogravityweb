<?php

class ResellerClubAPI {

    public $api_user_id = "706625";
    public $api_key = "Y7xW7L2HPkjqTiJ59FRGCZu5dh3U0o78";
    //public $api_user_id = "255388";
    //public $api_user_id = "706625";
    //public $api_key = "0363O71bJmUpwJ2W5r2M9At0Jsm0UcFA";
    //public $api_key = "Ie61qyIhGIQR45yXT2VD78rwLeOHxdNn";
    // List of TDL's - TLDs for which the domain name availability needs to be checked    

    public $tlds_list = array("com", "net", "in", "biz", "org", "asia", "co");
    public $domainname;

    public function __construct() {
        if (isset($_POST['domain'])) {
            $this->domainname = preg_replace('/[\s-]+/', '-', substr(trim($_POST['domain']), 0, 253));
            $ret = $this->DomainAvailability($this->domainname);
            $sug = $this->DomainSuggestion($this->domainname);
        }
    }

//Get Domain Availability ResellerClub API
    public function DomainAvailability($y) {

        $tld = "";
        foreach ($this->tlds_list as $arrayitem) {
            $tld .= '&tlds=' . $arrayitem;
        }
        $url = 'https://test.httpapi.com/api/domains/available.json?auth-userid=' . $this->api_user_id . '&api-key=' . $this->api_key . '&domain-name=' . $this->domainname . $tld . '&suggest-alternative=true';
        $url = 'https://test.httpapi.com/api/domains/available.json?auth-userid=' . $this->api_user_id . '&api-key=' . $this->api_key . '&domain-name=' . $this->domainname . $tld . '&suggest-alternative=true';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CAINFO, getcwd() . '/cacert.pem');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $apidata = curl_exec($curl);
        $data = json_decode($apidata, TRUE);
        $dname = array();
        $resp = array();
        foreach ($this->tlds_list as $arrayitem) {
            $fulldomainname = $this->domainname . "." . $arrayitem;
            if ($data[$fulldomainname]["status"] == "available") {
                array_push($dname, $fulldomainname);
                array_push($resp, 'Available');
            } else {
                array_push($dname, $fulldomainname);
                array_push($resp, 'Not Available');
            }
        }
        $arr = array('a' => $dname, 'b' => $resp);
        $apidata_json = json_encode($arr);
        die($apidata_json);
    }

//    public function DomainSuggestion() {
//        //$tld = "";
//        //foreach($this->tlds_list as $arrayitem)	{ $tld.= '&tlds=' . $arrayitem;	}
//        $url = 'https://test.httpapi.com/api/domains/v5/suggest-names.json?auth-userid=' . $this->api_user_id . '&api-key=' . $this->api_key . '&keyword=' . $this->domainname;
//
//            //if ($data) $url = sprintf("%s?%s", $url, http_build_query($data));
//
//            $curl = curl_init();
//        curl_setopt($curl, CURLOPT_URL, $url);
//        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//        $apidata = curl_exec($curl);
//        die($apidata);
//            $apidata_json = json_decode($apidata, TRUE);
////        return $apidata_json;
//    }

    public function FormValidation() {
        if (isset($_POST['check']) && preg_match('/^[a-z0-9\-]+$/i', $this->domainname) && isset($_POST['domain']) != "" && $this->tlds_list) {
            return true;
        } else {
            return false;
        }
    }

}

$api = new ResellerClubAPI;

