<?php
    session_start();
    include_once SYSTEM_PATH."/Model/Comment/CommentModel.php";

    class CommentController {
        public $commentModel;

        public function __construct()
        {
            $this->commentModel = new CommentModel();
        }

        function Approve() {
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $this->commentModel->ApproveComment($id);
                header("location: index.php?c=Comment&a=Approve&s=true");
            } else {
                $comments = $this->commentModel->GetApproveComments();
                require_once SYSTEM_PATH."/View/Admin/Manage-Comments.php";
            }
        }

        function Disapprove() {
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $this->commentModel->DisapproveComment($id);
                header("location: index.php?c=Comment&a=Disapprove&s=true");
            } else {
                $comments = $this->commentModel->GetDisApproveComments();
                require_once SYSTEM_PATH."/View/Admin/Disapprove-Comments.php";
            }
        }

        function Del() {
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $this->commentModel->DeleteComment($id);
                header("location: index.php?c=Comment&a=Approve&s=true");
            }
        }
    }