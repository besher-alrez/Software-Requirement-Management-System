<?php

class sql extends dbconnection{
public function __construct(){
	$this->DBO();
}




public function checkLogin($username, $password){
       

       $db = $this->dblocal;

       try {

       	$stmt = $db->prepare("select * from user where user_name= :username and password= :password");
       	$stmt->bindParam("username",$username);

       $stmt->bindParam("password",$password);

       $stmt->execute();
       $stat[0]= true;
       $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
       $stat[2]= $stmt->rowCount();
       return $stat;
       
       	
       } catch (PDOException $ex) {

       	$stat[0] = false;
       	$stat[1] = $ex->getMessage();
       	return $stat;
       	
       }
}

public function checkName($username){
       

       $db = $this->dblocal;

       try {

              $stmt = $db->prepare("select * from user where user_name= :username");
              $stmt->bindParam("username",$username);

    

       $stmt->execute();
       $stat[0]= true;
       $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
       $stat[2]= $stmt->rowCount();
       return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }




}

public function signup($username,$password,$cname,$p_num){
 $db = $this->dblocal;

       try {

              $stmt = $db->prepare("INSERT INTO user (user_name, password, company,phone_number)
              VALUES ('$username', '$password','$cname','$p_num')");
       $stmt->bindParam("username",$username);

       $stmt->bindParam("password",$password);
       $stmt->bindParam("company",$cname);

       $stmt->bindParam("phone_number",$p_num);
       $stmt->execute();
       $stat[0]= true;
       $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
       $stat[2]= $stmt->rowCount();
       return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }

}

public function mAccount($username,$password,$cname,$p_num){
       

       $db = $this->dblocal;

       try {

              $stmt = $db->prepare("select * from user where user_name= :username and password= :password and company= :cname and phone_number= :p_num");
              $stmt->bindParam("username",$username);
              $stmt->bindParam("password",$password);
              $stmt->bindParam("cname",$cname);
              $stmt->bindParam("username",$p_num);

    

       $stmt->execute();
       $stat[0]= true;
       $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
       $stat[2]= $stmt->rowCount();
       return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }
}

public function EditAccount($username,$cname,$p_num){
 $db = $this->dblocal;

       try {

                     $stmt = $db->prepare("UPDATE user SET company= '$cname', phone_number= '$p_num' WHERE  user_name= '$username'");
                     $stmt->bindParam("username",$username);

                     $stmt->bindParam("password",$password);
                     $stmt->bindParam("company",$cname);

                     $stmt->bindParam("phone_number",$p_num);
                     $stmt->execute();
                     $stat[0]= true;
                    
                     return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }

}
public function updatePassword($username,$password){
 $db = $this->dblocal;

       try {

                     $stmt = $db->prepare("UPDATE user SET password= '$password' WHERE  user_name= '$username'");
                     $stmt->bindParam("username",$username);

                     $stmt->bindParam("password",$password);
                     
                     $stmt->execute();
                     $stat[0]= "done";
                    // $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
                    // $stat[2]= $stmt->rowCount();
                     return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = "wrong";
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }

}


public function userprojects($username){
       

       $db = $this->dblocal;

       try {

              $stmt = $db->prepare("SELECT * FROM projects WHERE manager_name=:username ");
              $stmt->bindParam("username",$username);



              $stmt->execute();
              $stat[0]= true;
              $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
              $stat[2]= $stmt->rowCount();
              return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }
}

public function memberprojects($username){
       

       $db = $this->dblocal;

       try {

              $stmt = $db->prepare("SELECT * FROM projects WHERE project_id in ( SELECT project_id from project_member WHERE user_name =:username)
 ");
              $stmt->bindParam("username",$username);



              $stmt->execute();
              $stat[0]= true;
              $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
              $stat[2]= $stmt->rowCount();
              return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }
}


public function CreateProject($username,$project_name,$project_desc){
 $db = $this->dblocal;

       try {

                     $stmt = $db->prepare("INSERT INTO projects (project_name, project_desc, manager_name)
                     VALUES ('$project_name', '$project_desc','$username');
                      /*SET @last_id_in_table1 = LAST_INSERT_ID();
                      INSERT INTO project_member (project_id,user_name) VALUES (@last_id_in_table1,'')*/");
                     $stmt->bindParam("username",$username);

                     $stmt->bindParam("password",$password);
                     $stmt->bindParam("company",$cname);

                     $stmt->bindParam("phone_number",$p_num);
                     $stmt->execute();
                     $stat[0]= true;
                    
                     return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }

}


public function AddMember($username,$project_id){
 $db = $this->dblocal;

       try {

                     $stmt = $db->prepare("INSERT INTO project_member (project_id,user_name) VALUES($project_id,'$username')");
                     $stmt->bindParam("username",$username);

                     $stmt->bindParam("password",$password);
                     $stmt->bindParam("company",$cname);

                     $stmt->bindParam("phone_number",$p_num);
                     $stmt->execute();
                     $stat[0]= true;
                    
                     return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }

}
public function projectreq($project_id){
       

       $db = $this->dblocal;

       try {

              $stmt = $db->prepare("SELECT * from requirement where project_id= :project_id");
              $stmt->bindParam("project_id",$project_id);
             
       $stmt->execute();
       $stat[0]= true;
       $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
       $stat[2]= $stmt->rowCount();
       return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }
}



public function usecaseContent($req_id){
       

       $db = $this->dblocal;

       try {

              $stmt = $db->prepare("SELECT * from use_case where req_id= :req_id");
              $stmt->bindParam("req_id",$req_id);
             
       $stmt->execute();
       $stat[0]= true;
       $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
       $stat[2]= $stmt->rowCount();
       return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }
}
public function pmodelContent($req_id){
       

       $db = $this->dblocal;

       try {

              $stmt = $db->prepare("SELECT * from process_model where req_id= :req_id");
              $stmt->bindParam("req_id",$req_id);
             
       $stmt->execute();
       $stat[0]= true;
       $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
       $stat[2]= $stmt->rowCount();
       return $stat;
       
              
       } catch (PDOException $ex) {

              $stat[0] = false;
              $stat[1] = $ex->getMessage();
              return $stat;
              
       }
}

public function addUsecase($reqname,$req_type,$project_id,$usecase_name,$usecase_desc,$actors,$mScenario){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("INSERT INTO requirement (req_name, req_type, project_id)
                          VALUES ('$reqname', '$req_type',$project_id);
                           SET @last_id_in_table1 = LAST_INSERT_ID();
                           INSERT INTO use_case (usecase_name,usecase_desc,actors,main_scenario,req_id) VALUES ('$usecase_name','$usecase_desc','$actors','$mScenario',@last_id_in_table1)");
                          $stmt->bindParam("reqname",$reqname);
     
                          $stmt->bindParam("req_type",$req_type);
                          $stmt->bindParam("project_id",$project_id);
     
                          $stmt->bindParam("req_name",$req_name);
                          $stmt->bindParam("req_desc",$req_desc);
                          $stmt->bindParam("actors",$actors); 
                          $stmt->bindParam("mScenario",$mScenario); 
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }
     public function grabProjectID($req_id){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * from requirement where req_id= :req_id");
             $stmt->bindParam("req_id",$req_id);
            
      $stmt->execute();
      $stat[0]= true;
      $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
      $stat[2]= $stmt->rowCount();
      return $stat;
      
             
      } catch (PDOException $ex) {

             $stat[0] = false;
             $stat[1] = $ex->getMessage();
             return $stat;
             
      }
}

public function deleteReq($req_id){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("DELETE  from requirement where req_id= :req_id");
            $stmt->bindParam("req_id",$req_id);
            
      $stmt->execute();
      $stat[0]= true;
     // $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
     // $stat[2]= $stmt->rowCount();
      return $stat;
      
             
      } catch (PDOException $ex) {

             $stat[0] = false;
             $stat[1] = $ex->getMessage();
             return $stat;
             
      }
}
public function projectinfo($project_id){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * FROM projects WHERE project_id= :project_id");
             $stmt->bindParam("project_id",$project_id);



             $stmt->execute();
             $stat[0]= true;
             $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
             $stat[2]= $stmt->rowCount();
             return $stat;
      
             
      } catch (PDOException $ex) {

             $stat[0] = false;
             $stat[1] = $ex->getMessage();
             return $stat;
             
      }
}

public function addProcess($reqname,$req_type,$project_id,$process_name,$process_desc,$process_purpose,$process_outecomes,$complexity){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("INSERT INTO requirement (req_name, req_type, project_id)
                          VALUES ('$reqname', '$req_type',$project_id);
                           SET @last_id_in_table1 = LAST_INSERT_ID();
                           INSERT INTO process_model (process_name,process_desc,process_purpose,process_outcomes,complexity,req_id) VALUES ('$process_name','$process_desc','$process_purpose','$process_outecomes','$complexity',@last_id_in_table1)");
                          $stmt->bindParam("reqname",$reqname);
     
                          $stmt->bindParam("req_type",$req_type);
                          $stmt->bindParam("project_id",$project_id);
     
                          $stmt->bindParam("process_name",$process_name);
                          $stmt->bindParam("process_desc",$process_desc);
                          $stmt->bindParam("process_purpose",$process_purpose); 
                          $stmt->bindParam("process_outecomes",$process_outecomes); 
                          $stmt->bindParam("complexity",$complexity); 
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }

     public function viewMembers($project_id){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * FROM project_member WHERE project_id= :project_id");
             $stmt->bindParam("project_id",$project_id);



             $stmt->execute();
             $stat[0]= true;
             $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
             $stat[2]= $stmt->rowCount();
             return $stat;
      
             
      } catch (PDOException $ex) {

             $stat[0] = false;
             $stat[1] = $ex->getMessage();
             return $stat;
             
      }
}

public function deleteMember($member_name){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("DELETE  from project_member where user_name= :member_name");
             $stmt->bindParam("member_name",$member_name);
            
      $stmt->execute();
      $stat[0]= true;
      // $stat[1]= $stmt->fetchAll(PDO::FETCH_ASSOC);
      // $stat[2]= $stmt->rowCount();
      return $stat;
      
             
      } catch (PDOException $ex) {

             $stat[0] = false;
             $stat[1] = $ex->getMessage();
             return $stat;
             
      }
}






                                                                             }