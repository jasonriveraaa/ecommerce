-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 02:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Shirt'),
(2, 'Sweatshirt'),
(3, 'Pants'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`) VALUES
(1, 'jason.kandabog@gmail.com', 'c20216efaddd54fbfffe8b7c8dbfd3a9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `title`, `content`) VALUES
(1, 'How do I place order?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla eu ante eu accumsan. Aliquam accumsan tortor sit amet lacus tempor elementum. Fusce erat magna, pretium a sem sit amet, fringilla porttitor sapien. Sed at aliquam leo.&nbsp;</p><ul><li>Lorem ipsum</li><li>Lorem ipsum</li><li>Lorem ipsum</li><li>Lorem ipsum</li></ul><p>Sed nec condimentum tortor. Nunc viverra lectus vel quam ultrices finibus. Proin elit elit, convallis sed accumsan nec, imperdiet quis lectus. Sed sed turpis non quam dapibus egestas. Vestibulum faucibus dolor purus, nec auctor sapien lacinia a. Aliquam consequat ex vel aliquet cursus. Maecenas lobortis non diam a imperdiet. Nam orci orci, porta eget porttitor ac, laoreet commodo lectus. Integer cursus rutrum eros ac suscipit. Etiam quis lorem sem. Etiam nunc metus, viverra vitae nunc sit amet, tristique cursus mauris.</p>'),
(2, 'How much is the shipping fee?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla eu ante eu accumsan. Aliquam accumsan tortor sit amet lacus tempor elementum. Fusce erat magna, pretium a sem sit amet, fringilla porttitor sapien. Sed at aliquam leo. Sed nec condimentum tortor. Nunc viverra lectus vel quam ultrices finibus. Proin elit elit, convallis sed accumsan nec, imperdiet quis lectus. Sed sed turpis non quam dapibus egestas. Vestibulum faucibus dolor purus, nec auctor sapien lacinia a. Aliquam consequat ex vel aliquet cursus. Maecenas lobortis non diam a imperdiet. Nam orci orci, porta eget porttitor ac, laoreet commodo lectus. Integer cursus rutrum eros ac suscipit. Etiam quis lorem sem. Etiam nunc metus, viverra vitae nunc sit amet, tristique cursus mauris.</p>'),
(3, 'three', '<p>content threeasdasd</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` text NOT NULL,
  `collection` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `img` text NOT NULL,
  `hover_img` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`id`, `name`, `color`, `price`, `collection`, `category_id`, `img`, `hover_img`, `date`) VALUES
(1, 'Ad Astra Originals | Oversized Logo Tee', 'black', '700.00', 'Ad Astra Originals', 3, 'black.png', 'sample-featured.jpg', '2021-06-03'),
(2, 'Ad Astra Originals | Oversized Logo Tee', 'white', '700.00', 'Ad Astra Originals', 1, 'white.png', 'sample-featured.jpg', '2021-06-03'),
(3, 'Ad Astra Originals | Oversized Logo Tee', 'khaki', '700.00', 'Ad Astra Originals', 1, 'khaki.png', '', '2021-06-03'),
(4, 'Ad Astra Originals | Oversized Logo Tee', 'gray', '700.00', 'Ad Astra Originals', 1, 'gray.png', '', '2021-06-01'),
(5, 'Ad Astra Originals | Oversized Logo Tee', 'rust', '700.00', 'Ad Astra Originals', 1, 'rust.png', '', '2021-06-01'),
(6, 'Polaris', 'white', '999.00', 'To the stars and back', 1, 'white.png', 'sample-featured.jpg', '2021-06-07'),
(7, 'Polaris', 'black', '999.00', 'To the stars and back', 1, 'black.png', '', '2021-06-07'),
(8, 'Polaris', 'rust', '999.00', 'To the stars and back', 1, 'rust.png', '', '2021-06-07'),
(9, 'Polaris', 'Khahi', '999.00', 'To the stars and back', 1, 'khaki.png', '', '2021-06-07'),
(10, 'Abyssoque', 'black', '700.00', '2021 Sunset ', 2, 'black.png', 'sample-featured.jpg', '2021-06-29'),
(11, 'Abyssoque', 'white', '700.00', '2021 sunset', 2, 'white.png', 'sample-featured.jpg', '2021-06-29'),
(12, 'Sampleasd', 'Green', '300.00', 'Sample Collection', 1, 'black.png', 'sample-featured.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_privacy`
--

CREATE TABLE `tbl_privacy` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_privacy`
--

INSERT INTO `tbl_privacy` (`id`, `content`) VALUES
(1, '<p><strong>SECTION 1 – WHAT DO WE DO WITH YOUR INFORMATION?</strong></p><p>When you purchase something from our store, as part of the buying and selling process, we collect the personal information you give us such as your name, address and email address.<br>When you browse our store, we also automatically receive your computer’s internet protocol (IP) address in order to provide us with information that helps us learn about your browser and operating system.<br>Email marketing (if applicable): With your permission, we may send you emails about our store, new products and other updates.</p><p><strong>SECTION 2 – CONSENT</strong></p><p><i>How do you get my consent?</i></p><p>When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only.<br>If we ask for your personal information for a secondary reason, like marketing, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no.</p><p><i>How do I withdraw my consent?</i></p><p>If after you opt-in, you change your mind, you may withdraw your consent for us to contact you, for the continued collection, use or disclosure of your information, at any time, by contacting us at <a href=\"mailto:demmandapparel@gmail.com\">demmandapparel@gmail.com</a></p><p><strong>SECTION 3 – DISCLOSURE</strong></p><p>We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service.</p><p><strong>SECTION 4 – STRIPE</strong></p><p><i>Our store is hosted on Stripe</i>. They provide us with the online e-commerce platform that allows us to sell our products and services to you. Your data is stored through Stripe’s data storage, databases and the general Stripe application. They store your data on a secure server behind a firewall.</p><p><i>Payment:</i></p><p>iIf you choose a direct payment gateway to complete your purchase, then Stripe stores your credit card data. It is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS). Your purchase transaction data is stored only as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is deleted.<br>All direct payment gateways adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, Mastercard, American Express and Discover.<br>PCI-DSS requirements help ensure the secure handling of credit card information by our store and its service providers.</p><p><strong>SECTION 5 – THIRD-PARTY SERVICES</strong></p><p><i>In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us.</i></p><p>However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.<br>For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.<br>In particular, remember that certain providers may be located in or have facilities that are located a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.<br>As an example, if you are located in Canada and your transaction is processed by a payment gateway located in the United States, then your personal information used in completing that transaction may be subject to disclosure under United States legislation, including the Patriot Act. Once you leave our store’s website or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website’s Terms of Service.</p><p><i>Links</i></p><p>When you click on links on our store, they may direct you away from our site. We are not responsible for the privacy practices of other sites and encourage you to read their privacy statements.<br>Google analytics:<br>Our store uses Google Analytics to help us learn about who visits our site and what pages are being looked at</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_returns`
--

CREATE TABLE `tbl_returns` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_returns`
--

INSERT INTO `tbl_returns` (`id`, `content`) VALUES
(1, '<p>You can return a product for up to 30 days from the fulfillment/shipping date. Demmand Apparel Co. only offers store credit for returns. We do not issue refunds to original method of payment. &nbsp;After 30 days from the fulfillment/shipping date, a refund cannot be offered. To be eligible for a return, the item must be unworn and unwashed <strong>(free of any stains, odors, makeup, deodorant, hair, or wear) </strong>and in original packaging.</p><p><strong>Before you Process a Return:</strong></p><ul><li>Once our distribution center receives your returned order, please allow up to 10 days for us to inspect and process your return.</li><li>Once your return is processed and approved you will receive an email with a digital store credit for the net amount of the item(s) returned, that can be used immediately.</li><li>The return shipping costs are the customer’s responsibility.</li><li>The original shipping fees are non-refundable.</li><li>All returns must be correctly processed through:&nbsp;<a href=\"mailto:demmandapparel@gmail.com\">order.demmand@gmail.com</a></li><li>Demmand Apparel Co. items sent to our distribution center without a return done through order.demmand@gmail.com&nbsp;will be discarded upon receipt.</li><li>By issuing a return to Demmand Apparel Co. you agree to the terms of the Return Policy.</li><li>If the return does not meet the criteria above, the return will be rejected and discarded and a refund will not be issued. Demmand Apparel Co. will not return rejected merchandise.</li><li>Demmand Apparel Co. does not hold or accept responsibility for packages or items lost, stolen, or stuck in transit when being delivered back to our distribution center. You must provide a tracking number when you return the order.</li></ul><p><strong>Damaged Items:</strong> &nbsp;Damaged items must be reported/emailed within 3 days of receipt with photos attached to order.demmand@gmail.com. If not reported within 3 days, we will not issue replacements. Demmand Apparel Co. is not responsible for normal wear and tear to items purchased and will not issue a new item outside of the 3-day window of receiving the item.</p><p>If you have received an incorrect item or have experienced another issue with your order, please contact order.demmand@gmail.com within 3 days of receiving your order with a picture of the items and packing slip.</p><p><strong>Non-Returnable Items:</strong></p><p>Considered “final sale” and may not be returned or exchanged for store credit or a refund.</p><ul><li>Sale/Clearance items (as indicated on the product page)</li><li>Exclusive Drops</li><li>Products considered “Final Sale” (as indicated on the product page)</li><li>Accessories – including but not limited to hats, stickers, phone cases and other items</li></ul><p><strong>Exchanges:</strong></p><p>Because we can’t ensure our customers will be issued the style/size they desire by the time their returned items come back to the distribution center we do not offer exchanges. &nbsp;</p><p>By processing a return through our Customer Support and sending your items back, you will receive store credit to make a future purchase. &nbsp;</p><p><strong>Refunds for Returns:</strong></p><p>Please note that original shipping fees are non-refundable and the cost of the return shipping label is the customer’s responsibility.</p><p>Once your return is received and inspected, we will notify you of the approval or rejection of your return. Please allow up to 10 days for your return to process. &nbsp;If you are approved, you will receive an email with your digital store credit for the net amount of the item(s) returned.</p><p><strong>Reserved Rights Regarding Returns:</strong></p><p>Demmand Apparel Co. reserves the right to solely define and limit, refuse, and/or reject returns from customers at any time due to:</p><ul><li>An irregular or excessive returns history indicative of “wardrobing”.</li><li>An irregular or excessive returns history involving worn, altered, laundered, damaged, or missing items, or potential fraudulent or criminal activity.</li><li>Demmand Apparel Co. items sent to our distribution center without a return processed through order.demmand@gmail.com will be discarded upon receipt and will not be refunded.</li></ul><p>Similarly, Demmand Apparel Co. reserves the right to refuse service to any customer or entity, due to similar actions as noted above.</p><p><strong>To Process a Return:</strong></p><p>By processing a return, you acknowledge and have read our entire Return Policy and understand the terms.</p><p>Please email <a href=\"mailto:support@shoploganpaul.com\"><strong>order.demmand@gmail.com</strong></a> to begin a return. Please include the order number and email address used to place the order.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id`, `content`) VALUES
(1, '<ul><li>Processing time is separate from shipping time.</li><li>Orders are processed Monday-Friday (excluding holidays).&nbsp;Processing time requires 7-14 days.</li><li>Shipping time is based off the method selected by the customer at checkout.</li><li>All shipping times are an estimation and cannot be guaranteed.</li></ul><figure class=\"table\"><table><tbody><tr><td><strong>Method</strong></td><td><strong>Time</strong></td><td><strong>Rate</strong></td></tr><tr><td><strong>Door to Door Delivery (Metro Manila ONLY): &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong></td><td>1 day after email confirmation is received &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td><td>₱ 150</td></tr><tr><td><p><strong>Province:</strong></p><p>via J&amp;T</p></td><td>2 – 4 business days (from the receiving email confirmation)</td><td>₱ 230</td></tr></tbody></table></figure><p><strong>We currently ship to:&nbsp;</strong>Philippines</p><p><strong>Shipping fees are non-refundable. </strong>For items returned to Demmand Apparel Co. due to an undeliverable addresses or issues with Customs, refunds will be issued for the net price of your item(s) minus the shipping charge.</p><p><strong>Demmand Apparel Co. does not hold or accept any responsibility for packages that have been stated as items lost, stolen, stuck in transit, or delivered.</strong> We do not issue refunds or store credit for packages that the courier confirms as lost in transit or delivered. Please contact your local postal service to locate your order.&nbsp;The Customer Support Team can only see the same tracking information given to the customer through the tracking number.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terms`
--

CREATE TABLE `tbl_terms` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_terms`
--

INSERT INTO `tbl_terms` (`id`, `content`) VALUES
(1, '<p>We are not responsible for international taxes and duties as well as State and Local taxes accrued for your purchase. Those fees are the sole responsibility of the customer. In the event of a returned order, duties and shipping fees will not be refunded.</p><p>Demmand Apparel Co. reserves the right to solely define and limit, refuse, and/or cancel orders from customers at any time due to:</p><ul><li>An irregular or excessive returns history indicative of “wardrobing;”</li><li>An irregular or excessive returns history involving worn, altered, laundered, damaged, or missing items; or,</li><li>Potential fraudulent or criminal activity.</li></ul><p>For items returned to Demmand Apparel Co. due to an undeliverable address or issues with customs, refunds will be issued for the net price of your item(s) minus the shipping charge. All shipping fees are nonrefundable.</p><p>&nbsp;</p><p><strong>OVERVIEW:</strong></p><p>This website is operated by Demmand Apparel Co. Throughout the site, the terms “we”, “us” and “our” refer to Demmand Apparel Co. Demmand offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.</p><p>By visiting our site and/or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.</p><p>Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.</p><p>Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.&nbsp;</p><p><strong>SECTION 1 – ONLINE STORE TERMS</strong></p><p>You affirm that you are either more than 18 years of age, an emancipated minor, or possess legal parental or guardian consent, and are fully able and competent to enter into the terms, conditions, obligations, affirmations, representations, and warranties set forth in these Terms of Service, and to abide by and comply with these Terms of Service.</p><p>If you are under 18 years of age, do not access or use this site for any reason. Minors are not authorized to make a purchase without parental consent. Demmand Apparel Co. does not take responsibility for purchases made without parental consent by a minor. An unauthorized purchase made by a minor is not considered fraudulent and must comply with the Terms of Service. Demmand Apparel Co. will not make exceptions to the Return or Shipping Policies due to unauthorized purchases made by a minor.</p><p><strong>SECTION 2 – GENERAL CONDITIONS</strong></p><p>We reserve the right to refuse service to anyone for any reason at any time.</p><p>You understand that your content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices. Credit card information is always encrypted during transfer over networks.</p><p>You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the service is provided, without express written permission by us.</p><p>The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms.</p><p><strong>SECTION 3 – ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION</strong></p><p>We are not responsible if information made available on this site is not accurate, complete or current. The material on this site is provided for general information only and should not be relied upon or used as the sole basis for making decisions without consulting primary, more accurate, more complete or more timely sources of information. Any reliance on the material on this site is at your own risk.</p><p>This site may contain certain historical information. Historical information, necessarily, is not current and is provided for your reference only. We reserve the right to modify the contents of this site at any time, but we have no obligation to update any information on our site. You agree that it is your responsibility to monitor changes to our site.</p><p><strong>SECTION 4 – MODIFICATIONS TO THE SERVICE AND PRICES</strong></p><p>Prices for our products are subject to change without notice.</p><p>We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time.</p><p>We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service.</p><p><strong>SECTION 5 – PRODUCTS OR SERVICES (if applicable)</strong></p><p>Certain products or services may be available exclusively online through the website. These products or services may have limited quantities and are subject to return only according to our Return Policy.</p><p>We have made every effort to display as accurately as possible the colors and images of our products that appear at the store. We cannot guarantee that your computer monitor’s display of any color will be accurate.</p><p>We reserve the right, but are not obligated, to limit the sales of our products or Services to any person, geographic region or jurisdiction. We may exercise this right on a case-by-case basis. We reserve the right to limit the quantities of any products or services that we offer. All descriptions of products or product pricing are subject to change at any time without notice, at the sole discretion of us. We reserve the right to discontinue any product at any time. Any offer for any product or service made on this site is void where prohibited.</p><p>We do not warrant that the quality of any products, services, information, or other material purchased or obtained by you will meet your expectations, or that any errors in the Service will be corrected.</p><p><strong>SECTION 6 – ACCURACY OF BILLING AND ACCOUNT INFORMATION</strong></p><p>We reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order. These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e-mail and/or billing address/number provided at the time the order was made. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers or distributors.</p><p>You agree to provide current, complete and accurate purchase and account information for all purchases made at our store. You agree to promptly update your account and other information, including your email address and credit card numbers and expiration dates, so that we can complete your transactions and contact you as needed.</p><p>For more detail, please review our returns policy in the below accordion.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_privacy`
--
ALTER TABLE `tbl_privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_returns`
--
ALTER TABLE `tbl_returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_terms`
--
ALTER TABLE `tbl_terms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_privacy`
--
ALTER TABLE `tbl_privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_returns`
--
ALTER TABLE `tbl_returns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_terms`
--
ALTER TABLE `tbl_terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
