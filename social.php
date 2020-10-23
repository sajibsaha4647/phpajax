<?php
require_once('functions/function.php');

get_Header();
get_Sidebar();
?>
<div class="clear">
</div>
<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
                <li><a class="menuitem">Site Option</a>
                    <ul class="submenu">
                        <li><a href="titleslogan.html">Title & Slogan</a></li>
                        <li><a href="social.html">Social Media</a></li>
                        <li><a href="copyright.html">Copyright</a></li>

                    </ul>
                </li>

                <li><a class="menuitem">Update Pages</a>
                    <ul class="submenu">
                        <li><a>About Us</a></li>
                        <li><a>Contact Us</a></li>
                    </ul>
                </li>
                <li><a class="menuitem">Category Option</a>
                    <ul class="submenu">
                        <li><a href="addcat.html">Add Category</a> </li>
                        <li><a href="catlist.html">Category List</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Post Option</a>
                    <ul class="submenu">
                        <li><a href="addpost.html">Add Post</a> </li>
                        <li><a href="postlist.html">Post List</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="grid_10">

    <div class="box round first grid">
        <h2>Update Social Media</h2>
        <div class="block">
            <form>
                <table class="form">
                    <tr>
                        <td>
                            <label>Facebook</label>
                        </td>
                        <td>
                            <input type="text" name="facebook" placeholder="Facebook link.." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Twitter</label>
                        </td>
                        <td>
                            <input type="text" name="twitter" placeholder="Twitter link.." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>LinkedIn</label>
                        </td>
                        <td>
                            <input type="text" name="linkedin" placeholder="LinkedIn link.." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Google Plus</label>
                        </td>
                        <td>
                            <input type="text" name="googleplus" placeholder="Google Plus link.." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Update" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<?php
get_Footer();
?>