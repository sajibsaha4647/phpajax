<?php
require_once('functions/function.php');
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '../Config/Project.php');
// $Project = new Project();
get_Header();
get_Sidebar();
?>
<div class="grid_10">

   <div class="box round first grid">
        <h2>check user name</h2>
        <div class="block copyblock">
            <form action="" method="post" enctype="multipart/form-data">
                <table class="form">
                    <tr>
                        <td>
                            <input type="text" name="username" id="username" placeholder="Enter user name..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" Value="Save" />
                        </td>
                    </tr>
                </table>
                <div id="userstatus"></div>
            </form>
        </div>
    </div>

<?php
get_Footer();
?>