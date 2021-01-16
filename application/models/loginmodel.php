<?php 
	class LoginModel extends CI_Model {
		public function isValidate($username, $password) {
			$result = $this->db->where(['username' => $username, 'password' => $password])
						    ->get('users');
			// echo "<pre>";
			// print_r($result);
			if($result->num_rows())
				return $result->row()->id;
			else
				return false;

		}// end of isValidate()
		/*
		**** For delete article
		*/
		//retun list of all articles of select user only
		public function articleList($limit, $offset)  {
			$id = $this->session->userdata('id'); //get user id fromm session 
			$result = $this->db->select(['id','article_title','article_body'])
								->from('articles')
								->where(['user_id' => $id])
								->limit($limit, $offset)
								->get();
			return $result->result();
		}

		//return no of record count 
		public function num_rows() {
			$id = $this->session->userdata('id'); //get user id fromm session 
			$result = $this->db->select()
								->from('articles')
								->where(['user_id' => $id])
								->get();
			return $result->num_rows();

		}
		/*
		****for update article 
		*/
		public function find_article($article_id) {
			$result = $this->db->select(['article_title', 'article_body', 'id'])
					 ->where('id', $article_id)
					 ->get('articles');
			return $result->row();
		}

		public function update_article($article_id, Array $new_article) {
			return $this->db->where('id', $article_id)
							->update('articles', $new_article);
		}
		//add Article 
		public function add_article($array) {
			return $this->db->insert('articles', $array);
		} 

		//delete Article 
		public function del_article($id) {
			return $this->db->delete('articles', ['id' => $id]);
		} 


		//add user
		public function add_user($array) {
			return $this->db->insert('users', $array);
		}

		/*
		*** for all articles display on home page return number of rows...
		*/

		public function all_article_count(){
			$result = $this->db->select()
					 ->from('articles')		
					 ->get();
			return $result->num_rows();
		}

		public function all_article_list($limit, $offset){
			$result = $this->db->select()
					  ->from('articles')
					  ->limit($limit, $offset)
					  ->get();
					  // print_r($result->result());
			return $result->result();

		}
	}
?>