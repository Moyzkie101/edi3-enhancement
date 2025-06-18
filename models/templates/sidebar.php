<?php
?>
<ul>
    <li>
        <a href="../Dashboard/home.php">Home</a>
    </li>
<?php if (isset($_SESSION['user_type']) && ($_SESSION['user_type'] === $allowed_types[2])): ?>
    <li>
        <a href="#">Dashboard</a>
    </li>
    <li>
        <a href="#">Profile</a>
    </li>
<?php endif; ?>
<?php if (isset($_SESSION['user_type']) && ($_SESSION['user_type'] === $allowed_types[0])): ?>
    <li>IMPORT
        <ul>
            <li>
                <a href="#">Payroll</a>
            </li>
            <li>
                <a href="#">Remittance Old</a>
            </li>
            <li>
                <a href="#">Remittance New</a>
            </li>
            <li>
                <a href="#">Sick Leave Conversion</a>
            </li>
            <li>
                <a href="#">MCash Wallet</a>
            </li>
            <li>
                <a href="#">ML Fund</a>
            </li>
        </ul>
        
    </li>
    <li>DATA ENTRY
        <ul>
            <li>MCash Wallet
                <ul>
                    <li>
                        <a href="#">Payroll</a>
                    </li>
                    <li>Remittances
                        <ul>
                            <li>
                                <a href="#">SSS</a>
                            </li>
                            <li>
                                <a href="#">PHILHEALTH</a>
                            </li>
                            <li>
                                <a href="#">PAGIBIG</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </li>
            
            
        </ul>
    </li>
    <li>POST EDI
        <ul>
            <li>
                <a href="#">Payroll</a>
            </li>
            <li>
                <a href="#">Remittance Old</a>
            </li>
            <li>
                <a href="#">Remittance New</a>
            </li>
            <li>
                <a href="#">Sick Leave Conversion</a>
            </li>
        </ul>
    </li>
<?php endif; ?>
<?php if (isset($_SESSION['user_type']) && ($_SESSION['user_type'] === $allowed_types[0] || $_SESSION['user_type'] === $allowed_types[1])): ?>
    <li>REPORTS
        <ul>
    <?php if (isset($_SESSION['user_type']) && ($_SESSION['user_type'] === $allowed_types[0])): ?>
            <li>HRMD FORMAT
                <ul>
                    <li>
                        <a href="#">Payroll</a>
                    </li>
                    <li>
                        <a href="#">Remittance Old</a>
                    </li>
                    <li>
                        <a href="#">Remittance New</a>
                    </li>
                    <li>
                        <a href="#">Sick Leave Conversion</a>
                    </li>
                </ul>
            </li>
            <li>EDI FORMAT
                <ul>
                    <li>
                        <a href="#">Payroll</a>
                    </li>
                    <li>
                        <a href="#">Remittance Old</a>
                    </li>
                    <li>
                        <a href="#">Remittance New</a>
                    </li>
                    <li>
                        <a href="#">Sick Leave Conversion</a>
                    </li>
                </ul>
            </li>
            <li>EDI ALLOCATION FORMAT
                <ul>
                    <li>
                        <a href="#">Payroll</a>
                    </li>
                    <li>
                        <a href="#">Remittance New</a>
                    </li>
                </ul>
            </li>
            <li>RECON & VARIANCE FORMAT
                <ul>
                    <li>
                        <a href="#">Payroll</a>
                    </li>
                    <li>
                        <a href="#">Remittance New</a>
                    </li>
                    <li>
                        <a href="#">MCash Wallet</a>
                    </li>
                </ul>
            </li>
            <li>SUMMARY & DETAILED FORMAT
                <ul>
                    <li>
                        <a href="#">Payroll</a>
                    </li>
                </ul>
            </li>
            <li>DEDUCTION FORMAT
                <ul>
                    <li>
                        <a href="#">ML Fund</a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['user_type']) && ($_SESSION['user_type'] === $allowed_types[1])): ?>
            <li>RECON & VARIANCE FORMAT
                <ul>
                    <li>
                        <a href="#">Payroll</a>
                    </li>
                    <li>
                        <a href="#">Remittance New</a>
                    </li>
                    <li>
                        <a href="#">MCash Wallet</a>
                    </li>
                </ul>
            </li>
            <li>DEDUCTION FORMAT
                <ul>
                    <li>
                        <a href="#">ML Fund</a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>
<?php if (isset($_SESSION['user_type']) && ($_SESSION['user_type'] === $allowed_types[0] || $_SESSION['user_type'] === $allowed_types[2])): ?>
    <li>MAINTENANCE
        <ul>
            <?php if (isset($_SESSION['user_type']) && ($_SESSION['user_type'] === $allowed_types[2])): ?>
            <li>Accounts
                <ul>
                    <li>
                        <a href="../Admin/Maintenance/account-user.php">User</a>
                    </li>
                </ul>
            </li>
            <?php elseif (isset($_SESSION['user_type']) && ($_SESSION['user_type'] === $allowed_types[0])): ?>
                <li>DATA REMOVAL
                    <ul>
                        <li>HRMD FORMAT
                            <ul>
                                <li>
                                    <a href="#">Payroll</a>
                                </li>
                                <li>
                                    <a href="#">Remittance Old</a>
                                </li>
                                <li>
                                    <a href="#">Remittance New</a>
                                </li>
                            </ul>
                        </li>
                        <li>EDI FORMAT
                            <ul>
                                <li>
                                    <a href="#">Payroll</a>
                                </li>
                                <li>
                                    <a href="#">Remittance Old</a>
                                </li>
                                <li>
                                    <a href="#">Remittance New</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>
    <li>
        <a href="../models/view/logout-view.php">Logout</a>
    </li>
</ul>