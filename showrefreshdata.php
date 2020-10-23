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
        <h2>Auto Refresh</h2>
        <div class="block copyblock">
            <form action="" method="post" enctype="multipart/form-data">
                <table class="form">
                    <tr>
                        <td>
                            <input type="text" name="name" id="name" placeholder="Enter name..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" id="submit">Submit</button>
                        </td>
                    </tr>
                </table>
                <div id="showdata"></div>
            </form>
        </div>
    </div>

<?php
get_Footer();
?>