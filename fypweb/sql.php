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

public function checkadminLogin($username, $password){
       

      $db = $this->dblocal;

      try {

            $stmt = $db->prepare("select * from admin where user_name= :username and password= :password");
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

public function adminprojects(){
       

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * FROM projects WHERE manager_name LIKE 'admin' ");



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

public function adminuserprojects(){
       

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * FROM projects WHERE manager_name NOT LIKE 'admin'  ");



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

public function addUsecase($reqname,$req_type,$author,$project_id,$usecase_name,$usecase_desc,$actors,$mScenario,$image){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("INSERT INTO requirement (req_name,req_type,author, project_id)
                          VALUES ('$reqname', '$req_type','$author',$project_id);
                           SET @last_id_in_table1 = LAST_INSERT_ID();
                           INSERT INTO use_case (usecase_name,usecase_desc,actors,main_scenario,img_name,req_type,req_id) VALUES ('$usecase_name','$usecase_desc','$actors','$mScenario','$image','$req_type',@last_id_in_table1)");
                          $stmt->bindParam("reqname",$reqname);
     
                          $stmt->bindParam("req_type",$req_type);
                          $stmt->bindParam("project_id",$project_id);
     
                          $stmt->bindParam("req_name",$req_name);
                          $stmt->bindParam("req_desc",$req_desc);
                          $stmt->bindParam("actors",$actors); 
                          $stmt->bindParam("mScenario",$mScenario); 
                          $stmt->bindParam("img_name",$image); 
                          $stmt->bindParam("author",$author); 
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

public function deleteComment($comment_id){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("DELETE  from com where comment_id= :comment_id");
            $stmt->bindParam("comment_id",$comment_id);
            
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
public function totalreq($projectID){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * from requirement where project_id= :projectID");
             $stmt->bindParam("projectID",$projectID);
            
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

public function useCaseNum($projectID){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * from requirement where project_id= :projectID and req_type='use case'");
             $stmt->bindParam("projectID",$projectID);
            
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
public function ProcessModelNum($projectID){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * from requirement where project_id= :projectID and req_type='process_model'");
             $stmt->bindParam("projectID",$projectID);
            
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
public function DataModelNum($projectID){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * from requirement where project_id= :projectID and req_type='data_model'");
             $stmt->bindParam("projectID",$projectID);
            
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
public function BusinessNum($projectID){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * from requirement where project_id= :projectID and req_type='Business'");
             $stmt->bindParam("projectID",$projectID);
            
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
public function DeclarativeNum($projectID){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * from requirement where project_id= :projectID and req_type='Declarative_Stm'");
             $stmt->bindParam("projectID",$projectID);
            
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
public function reqTypeNum($projectID){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT req_type, count(*) FROM `requirement` where project_id= :projectID group by req_type") ;
             $stmt->bindParam("projectID",$projectID);
            
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

public function addProcess($reqname,$req_type,$author,$project_id,$process_name,$process_desc,$process_purpose,$process_outecomes,$complexity,$image){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("INSERT INTO requirement (req_name, req_type, author,project_id)
                          VALUES ('$reqname', '$req_type','$author',$project_id);
                           SET @last_id_in_table1 = LAST_INSERT_ID();
                           INSERT INTO process_model (process_name,process_desc,process_purpose,process_outcomes,img_name,complexity,req_id) VALUES ('$process_name','$process_desc','$process_purpose','$process_outecomes','$image','$complexity',@last_id_in_table1)");
                          $stmt->bindParam("reqname",$reqname);
     
                          $stmt->bindParam("req_type",$req_type);
                          $stmt->bindParam("project_id",$project_id);
     
                          $stmt->bindParam("process_name",$process_name);
                          $stmt->bindParam("process_desc",$process_desc);
                          $stmt->bindParam("process_purpose",$process_purpose); 
                          $stmt->bindParam("process_outecomes",$process_outecomes); 
                          $stmt->bindParam("complexity",$complexity); 
                          $stmt->bindParam("img_name",$image); 
                          $stmt->bindParam("author",$author); 
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

public function viewUsers(){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * FROM user ");



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
public function deleteProject($project_id){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("DELETE  from projects where project_id= :project_id");
             $stmt->bindParam("project_id",$project_id);
            
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

public function deleteUser($member_name){
      

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("DELETE  from user where user_name= :member_name");
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

public function addComment($comment,$user_name,$req_id){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("INSERT INTO com (comment_desc,user_name,req_id) VALUES('$comment','$user_name','$req_id')");
                          $stmt->bindParam("req_id",$req_id);
     
                          $stmt->bindParam("comment",$comment);
                          $stmt->bindParam("user_name",$user_name);
                         
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }


public function grabComment($reqID){
       

       $db = $this->dblocal;

       try {

              $stmt = $db->prepare("select * from com where req_id= :reqID ");
            

       $stmt->bindParam("reqID",$reqID);

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

public function grabReq($req_id){
       

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

public function UpdateUsecase($req_id,$usecase_name,$usecase_desc,$actors,$mScenario,$image){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("UPDATE use_case SET usecase_name= '$usecase_name', usecase_desc= '$usecase_desc', actors= '$actors', main_scenario= '$mScenario', img_name= '$image' WHERE  req_id= '$req_id'");
                          $stmt->bindParam("usecase_name",$usecase_name);
     
                          $stmt->bindParam("usecase_desc",$usecase_desc);
                          $stmt->bindParam("actors",$actors);
     
                          $stmt->bindParam("main_scenario",$mScenario);
                          $stmt->bindParam("req_id",$req_id);
                          $stmt->bindParam("img_name",$image);
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }

     public function UpdateReqName($req_id,$req_name){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("UPDATE requirement SET req_name= '$req_name' WHERE  req_id= '$req_id'");
                          $stmt->bindParam("req_name",$req_name);
     
                          
                          $stmt->bindParam("req_id",$req_id);
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }

     public function UpdateProcess($req_id,$process_name,$process_desc,$process_purpose,$process_outcomes,$complexity,$image){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("UPDATE process_model SET process_name= '$process_name', process_desc= '$process_desc', process_purpose= '$process_purpose', process_outcomes= '$process_outcomes', complexity= '$complexity', img_name= '$image' WHERE  req_id= '$req_id'");
                          $stmt->bindParam("process_name",$process_name);
     
                          $stmt->bindParam("process_desc",$process_desc);
                          $stmt->bindParam("process_purpose",$process_purpose);
     
                          $stmt->bindParam("process_outcomes",$process_outcomes);
                          $stmt->bindParam("complexity",$complexity);
                          $stmt->bindParam("req_id",$req_id);
                          $stmt->bindParam("image_name",$Image);
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }
     
     public function addBusiness($reqname,$req_type,$author,$project_id,$business_name,$business_desc,$business_exm,$business_source,$relatedRules,$complexity,$priority,$requestedBy,$image){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("INSERT INTO requirement (req_name, req_type,author, project_id)
                          VALUES ('$reqname', '$req_type','$author',$project_id);
                           SET @last_id_in_table1 = LAST_INSERT_ID();
                           INSERT INTO business (business_name,business_desc,business_exm,business_source,related_rules,complexity,priority,requested_by,img_name,req_type,req_id) VALUES ('$business_name','$business_desc','$business_exm','$business_source','$relatedRules','$complexity','$priority','$requestedBy','$image','$req_type',@last_id_in_table1)");
                          $stmt->bindParam("reqname",$reqname);
     
                          $stmt->bindParam("req_type",$req_type);
                          $stmt->bindParam("project_id",$project_id);
     
                          $stmt->bindParam("business_name",$business_name);
                          $stmt->bindParam("business_desc",$business_desc);
                          $stmt->bindParam("business_exm",$business_exm); 
                          $stmt->bindParam("business_source",$business_source); 
                          $stmt->bindParam("related_rules",$relatedRules); 
                          $stmt->bindParam("complexity",$complexity); 
                          $stmt->bindParam("priority",$priority); 
                          $stmt->bindParam("requested_by",$requestedBy); 
                          $stmt->bindParam("image",$image); 
                          $stmt->bindParam("author",$author); 
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }


     public function BRulesContent($req_id){
       

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * from business where req_id= :req_id");
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
public function UpdateBusiness($req_id,$business_name,$business_desc,$business_exm,$business_source,$relatedRules,$complexity,$priority,$requestedBy,$image){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("UPDATE Business SET business_name= '$business_name', business_desc= '$business_desc', business_exm= '$business_exm', business_source= '$business_source', complexity= '$complexity',related_rules= '$relatedRules', priority='$priority', requested_by='$requestedBy', img_name='$image' WHERE  req_id= '$req_id'");
                          $stmt->bindParam("req_id",$req_id);
     
     
                          $stmt->bindParam("business_name",$business_name);
                          $stmt->bindParam("business_desc",$business_desc);
                          $stmt->bindParam("business_exm",$business_exm); 
                          $stmt->bindParam("business_source",$business_source); 
                          $stmt->bindParam("related_rules",$relatedRules); 
                          $stmt->bindParam("complexity",$complexity); 
                          $stmt->bindParam("priority",$priority); 
                          $stmt->bindParam("requested_by",$requestedBy); 
                          $stmt->bindParam("image",$image); 
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }
     public function addData($reqname,$req_type,$author,$project_id,$data_name,$data_desc,$entities,$primary_keys,$complexity,$priority,$image){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("INSERT INTO requirement (req_name, req_type, author,project_id)
                          VALUES ('$reqname', '$req_type','$author',$project_id);
                           SET @last_id_in_table1 = LAST_INSERT_ID();
                           INSERT INTO data_model (data_name,data_desc,entities,primary_keys,complexity,priority,img_name,req_type,req_id) VALUES ('$data_name','$data_desc','$entities','$primary_keys','$complexity','$priority','$image','$req_type',@last_id_in_table1)");
                          $stmt->bindParam("reqname",$reqname);
     
                          $stmt->bindParam("req_type",$req_type);
                          $stmt->bindParam("project_id",$project_id);
     
                          $stmt->bindParam("data_name",$data_name);
                          $stmt->bindParam("data_desc",$data_desc);
                          $stmt->bindParam("entities",$entities); 
                          $stmt->bindParam("primary_keys",$primary_keys); 
                          $stmt->bindParam("complexity",$complexity); 
                          $stmt->bindParam("priority",$priority); 
                          $stmt->bindParam("img_name",$image); 
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }

     public function DModelContent($req_id){
       

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * from data_model where req_id= :req_id");
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
public function UpdateData($req_id,$data_name,$data_desc,$entities,$primary_keys,$complexity,$priority,$image){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("UPDATE data_model SET data_name= '$data_name', data_desc= '$data_desc', entities= '$entities', primary_keys= '$primary_keys', complexity= '$complexity', priority='$priority', img_name= '$image' WHERE  req_id= '$req_id'");
                          $stmt->bindParam("req_id",$req_id);
     
     
                          $stmt->bindParam("data_name",$data_name);
                          $stmt->bindParam("data_desc",$data_desc);
                          $stmt->bindParam("entities",$entities); 
                          $stmt->bindParam("primary_keys",$primary_keys); 
                          $stmt->bindParam("complexity",$complexity); 
                          $stmt->bindParam("priority",$priority); 
                          $stmt->bindParam("img_name",$image); 
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }
     public function addDclarative($reqname,$req_type,$author,$project_id,$declarative_name,$declarative_desc,$complexity,$priority){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("INSERT INTO requirement (req_name, req_type, author,project_id)
                          VALUES ('$reqname', '$req_type','$author',$project_id);
                           SET @last_id_in_table1 = LAST_INSERT_ID();
                           INSERT INTO declarative (declarative_name,declarative_desc,complexity,priority,req_type,req_id) VALUES ('$declarative_name','$declarative_desc','$complexity','$priority','$req_type',@last_id_in_table1)");
                          $stmt->bindParam("reqname",$reqname);
     
                          $stmt->bindParam("req_type",$req_type);
                          $stmt->bindParam("project_id",$project_id);
     
                          $stmt->bindParam("declarative_name",$declarative_name);
                          $stmt->bindParam("declarative_name",$declarative_name);
                          $stmt->bindParam("complexity",$complexity); 
                          $stmt->bindParam("priority",$priority); 
                          $stmt->bindParam("author",$author); 
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }

     public function DeclarativeContent($req_id){
       

      $db = $this->dblocal;

      try {

             $stmt = $db->prepare("SELECT * from declarative where req_id= :req_id");
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
public function UpdateDeclarative($req_id,$declarative_name,$declarative_desc,$complexity,$priority){
      $db = $this->dblocal;
     
            try {
     
                          $stmt = $db->prepare("UPDATE declarative SET declarative_name= '$declarative_name', declarative_desc= '$declarative_desc', complexity= '$complexity', priority='$priority' WHERE  req_id= '$req_id'");
                          $stmt->bindParam("req_id",$req_id);
     
     
                          $stmt->bindParam("declarative_name",$declarative_name);
                          $stmt->bindParam("declarative_desc",$declarative_desc);
                          $stmt->bindParam("complexity",$complexity); 
                          $stmt->bindParam("priority",$priority); 
                          $stmt->execute();
                          $stat[0]= true;
                         
                          return $stat;
            
                   
            } catch (PDOException $ex) {
     
                   $stat[0] = false;
                   $stat[1] = $ex->getMessage();
                   return $stat;
                   
            }
     
     }

     public function searchReq($projectID,$reqname){
       

      $db = $this->dblocal;

      try {
 
             $stmt = $db->prepare("SELECT * from requirement where req_name LIKE '%$reqname%' and  project_id= '$projectID'");
             $stmt->bindParam("req_name",$reqname);
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
 
                                                                             }