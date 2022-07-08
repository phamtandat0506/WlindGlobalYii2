<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
$this->title = "Giới Thiệu";

?>

<div class="container-fluid p-0">
    <!-- BreadCrumb -->
    <section data-aos="fade-up" data-aos-duration="1500">
        <div class="d-flex justify-content-center align-items-center bg-transparent" style="padding-top: 100px">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent arr-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">Về WGH</a>
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- BreadCrumb -->

    <!-- Slider -->
    <section data-aos="fade-up" data-aos-duration="1500">
        <div class="text-center">
            <p class="title-dark">Về Women Leaders Global Holdings</p>
        </div>

        <div class="container-fluid p-0 pt-5">
            <div id="sliderCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
                <ol class="carousel-indicators">
                    <li data-target="#sliderCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#sliderCarousel" data-slide-to="1"></li>
                    <li data-target="#sliderCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.pexels.com/photos/462024/pexels-photo-462024.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="img-slider d-block w-100" alt="..." />
                    </div>

                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/258109/pexels-photo-258109.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="img-slider d-block w-100" alt="..." />
                    </div>

                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/432013/pexels-photo-432013.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="img-slider d-block w-100" alt="..." />
                    </div>
                </div>

                <a class="carousel-control-prev" href="#sliderCarousel" role="button" data-slide="prev">
                    <div class="banner-icons">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                </a>

                <a class="carousel-control-next" href="#sliderCarousel" role="button" data-slide="next">
                    <div class="banner-icons">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>

    </section>
    <!-- Slider -->

    <!-- Gioi thieu va Nha Sang Lap -->
    <section data-aos="fade-up" data-aos-duration="1500" class="my-bg-2 text-light px-3 pb-5">
        <div class="text-center p-5">
            <p class="title-dark">Giới thiệu WGH</p>
        </div>

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8 col-lg-8 col-xl-8 mt-4">
                <ol class="list-style-number title-141E33-s">
                    <li>
                        Mạng lưới Nữ lãnh đạo Quốc tế <b>(Women Leaders International Networking)</b> được viết tắt là
                        WLIN
                    </li>
                    <li>
                        WLIN là mạng lưới dành cho các nữ lãnh đạo doanh nghiệp và các tổ chức xã hội có mong muốn
                        tìm kiếm cơ hội hợp tác, phát triển kinh doanh và mở rộng quan hệ trong nước cũng như quốc tế.

                    </li>
                    <li>
                        WLIN được mở rộng tại nhiều quốc gia, WLIN đã phát triển được mạng lưới tại Việt Nam,
                        Malaysia, Campuchia, Thái Lan, Philippines, Nga, Mỹ, Pháp, Hồng Kông, Ma Cao, Trung Quốc.
                    </li>
                    <li>
                        WLIN là đơn vị tổ chức bình chọn TOP 50 Nữ Lãnh Đạo Châu Á - Thái Bình Dương và TOP 100 Nữ Lãnh
                        đạo doanh nghiệp toàn cầu được tổ chức hàng năm tại Việt Nam và các quốc gia trên thế giới.
                    </li>
                    <li>
                        WLIN đã xây dựng được Website, Facebook, Phiên bản App điện thoại WLIN và Tạp chí WL Magazine để
                        làm cơ quan ngôn luận của mạng lưới trên toàn Thế giới. Hiện đang trong quá trình hoàn thiện
                        Phiên bản App điện thoại WLIN để kết nối và gia tăng các Quyền lợi cho Hội viên.

                    </li>
                    <li>
                        Thành viên của WLIN là những người nắm giữ vị trí từ cấp quản lý điều hành đến cấp lãnh đạo và
                        các chủ doanh nghiệp.

                    </li>
                </ol>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 px-5">
                <img src="./Images/Asset.png" class="w-100" alt="..." />
            </div>
        </div>

        <div class="text-center p-5">
            <p class="title-dark">Nhà sáng lập</p>
        </div>

        <div class="row d-flex justify-content-between px-5">
            <div class="founder-img col-md-4 col-lg-4 col-xl-3 mt-4 text-center">
                <div class="frame">
                    <img src="./Images/NTH-1.png" alt="..." />
                </div>
                <p class="img-name">Hình ảnh Quý bà Nguyễn Thu Hương - Á hậu Mrs World </p>

            </div>

            <div class="founder-intro col-md-8 col-lg-8 col-xl-9 mt-4 d-flex align-items-center">
                <span>
                    Quý bà <b>Nguyễn Thu Hương</b>, được biết đến với danh hiệu “Nữ hoàng truyền thông” khi là người
                    đứng
                    sau thành công của hàng loạt các chương trình dành cho doanh nhân và các cuộc thi Hoa hậu, thế
                    nhưng công chúng chắc hẳn vẫn chưa quên Hoa khôi Thể Thao - Á hậu Quý bà Thế giới Nguyễn Thu
                    Hương từng là gương mặt quen thuộc trên VTV với vai trò MC các chương trình ăn khách của Đài
                    truyền hình Việt Nam cũng như là host của các sự kiện lớn. 16 tuổi đăng quang Hoa khôi Thể thao
                    toàn quốc, 17 tuổi là MC quen mặt trên Đài truyền hình Việt Nam, nữ chính trong phim “Cô thư ký
                    xinh đẹp” … ai cũng nghĩ chị sẽ trở thành một nữ MC duyên dáng, một Biên tập viên am hiểu kiến
                    thức sâu rộng, một diễn viên đầy bản lĩnh, hay một cô người mẫu xinh đẹp. Thế nhưng, bỏ qua tất
                    cả ánh hào quang của sân khấu, ở lứa tuổi 21 tuổi chị quyết định rẽ ngang, “liều lĩnh” chọn cho
                    mình con đường riêng.Ở thời điểm hiện tại, nữ diễn viên “Cô thư ký xinh đẹp” Thu Hương ngày nào
                    giờ đã vô cùng nổi tiếng trong giới doanh nhân thành đạt với vai trò là Tổng giám đốc Tập đoàn
                    Truyền thông Nam Hương, chuyên gia tư vấn Chiến lược Thương hiệu và nhân hiệu, Chủ tịch học viện
                    hình tượngchuyên nghiệp Pro Image, Nhà sáng lập và điều hành mạng lưới Nữ lãnh đạo Quốc tế -
                    WLIN Global
                    và Mạng lưới Nam Phong cách doanh nhân Quốc tế - BSIN Global. Thành công là thế, ít ai biết được
                    rằng để có được thành tựu của ngày hôm nay, chị đã từng gặp phải rất nhiều khó khăn trong quá
                    trình khởi nghiệp của mình.<br />

                    Khởi nghiệp với đầy rẫy những chướng ngại, khó khăn, rào cản lại không nhận được sự ủng
                    hộ từ
                    gia đình, tuy nhiên với sự thông minh, quyết đoán, và nghị lực phi thường, chị đã gặt hái được
                    nhiều thành công không nhỏ trong sự nghiệp của mình.
                </span>
            </div>

        </div>
</div>
</section>
<!-- Gioi thieu va Nha Sang Lap -->

<!-- Lich su -->
<section data-aos="fade-up" data-aos-duration="1500" class="container-fluid px-5">
    <div class="text-center py-5">
        <p class="title-dark">Lịch sử hình thành và phát triển</p>
    </div>

    <div class="d-flex flex-column">
        <div class="d-flex flex-sm-row flex-column justify-content-around">
            <div class="history-item col-12 col-sm-6">
                <img src="https://www.wlin.com.vn/images/thumbnail136cutcut.jpg" class="history-img rounded" alt="" />
                <h3>2019</h3>
                <span class="history-span">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Tempore consequatur voluptate ex officia placeat alias dolorum a
                    sequi itaque est odit quas ratione, ipsa, vel veritatis,
                    corrupti rem cum reiciendis?</span>
            </div>

            <div class="history-item col-12 col-sm-6 py-5">
                <img src="https://www.wlin.com.vn/images/thumbnail136cutcut.jpg" class="history-img rounded" alt="" />
                <h3>2020</h3>
                <span class="history-span">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint,
                    voluptatibus nobis tempora quod minus officiis ipsa fugiat ipsam
                    corrupti veritatis assumenda odit sequi at quisquam provident
                    error quis adipisci est?</span>
            </div>
        </div>

        <div class="d-flex flex-sm-row flex-column justify-content-around">
            <div class="history-item col-12 col-sm-6">
                <img src="https://www.wlin.com.vn/images/thumbnail136cutcut.jpg" class="history-img rounded" alt="" />
                <h3>2021</h3>
                <span class="history-span">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Tempore consequatur voluptate ex officia placeat alias dolorum a
                    sequi itaque est odit quas ratione, ipsa, vel veritatis,
                    corrupti rem cum reiciendis?</span>
            </div>

            <div class="history-item col-12 col-sm-6 py-5">
                <img src="https://www.wlin.com.vn/images/thumbnail136cutcut.jpg" class="history-img rounded" alt="" />
                <h3>2022</h3>
                <span class="history-span">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint,
                    voluptatibus nobis tempora quod minus officiis ipsa fugiat ipsam
                    corrupti veritatis assumenda odit sequi at quisquam provident
                    error quis adipisci est?</span>
            </div>
        </div>
    </div>
</section>
<!-- Lich su -->

<!-- Ban Lanh Dao -->
<section data-aos="fade-up" data-aos-duration="1500" class="leader container-fluid px-5">
    <div class="text-center py-5">
        <p class="title-dark">Ban lãnh đạo</p>
    </div>

    <div class="row d-flex flex-sm-row flex-column align-items-center  text-sm-left text-center pb-5"
        style="padding: 0 5%;">
        <div class="leader-img col-3">
            <img src="https://womenleadersforum.vn/wp-content/uploads/2019/11/1574246780.jpeg" alt="">
        </div>
        <div class="col-9 px-5">
            <p class="leader-name">Á hậu Quý bà Thế giới - TS Nguyễn Thu Hương</p>
            <p class="leader-role">Nhà sáng lập và điều hành mạng lưới Nữ lãnh đạo Quốc tế - WLIN Global</p>
        </div>
    </div>

    <div class="row d-flex flex-sm-row-reverse flex-column align-items-center text-sm-right text-center pb-5"
        style="padding: 0 5%;">
        <div class="leader-img col-3 ">
            <img src="https://lh6.googleusercontent.com/RS-pWg5hte4HWV6ovrKw0Ma-4dActD3NhlHd1kBkaivR--yb1YOJcrEREuq984xIn2UqOFRp9Xt8XehgH-3qxWqzKrFuXF7FpeUGDWvGOlQlrhC7CPZQWPoixEuuZK4w7vA52ME"
                alt="">
        </div>
        <div class="col-9 px-5">
            <p class="leader-name">Nguyễn Thu Hương</p>
            <p class="leader-role">Nhà sáng lập và điều hành mạng lưới Nữ lãnh đạo Quốc tế - WLIN Global</p>
        </div>
    </div>

    <div class="row px-5 py-3">
        2.1. Chủ tịch CLB:<br />
        2.1.1. Điều hành CLB của mình nhằm giúp CLB phát triển một cách tốt nhất<br />
        2.1.2. Duy trì văn hoá của CLB dựa trên nền tảng văn hoá của WLIN<br />
        2.1.3. Quyết định việc kết nạp các vị trí Phó Chủ tịch và Thành viên của CLB<br />
        2.1.4. Đưa ra đường lối sinh hoạt của CLB.<br />
        2.2. Phó Chủ tịch: Các Phó chủ tịch phải có trách nhiệm giới thiệu và phát triển 10 thành viên mới không trùng
        ngành hàng với những thành viên đã có trong mạng lưới để trở thành thành viên chính thức của WLIN trong một năm
        nhiệm kì của mình.<br />
        2.2.1. Phó Chủ Tịch Thường Trực: Hỗ trợ Chủ tịch trong công tác quản lý, điều hành Club. Là người có sự chuẩn
        mực trong hình ảnh và uy tín xã hội. Thay mặt chủ tịch quyết định các vấn đề của CLB khi chủ tịch vắng
        mặt.<br />
        2.2.2. Phó chủ tịch phụ trách kết nối và thẩm định hội viên: Là bộ phận phụ trách giới thiệu và đón tiếp khách
        mời khi họ tới tham dự buổi sinh hoạt của CLB. Cung cấp thông tin về WLIN và CLB cho khách mời tới tham gia, hỗ
        trợ khách mời kết nối với các thành viên trong mạng lưới, chăm sóc khách mời để khách mời dễ hòa nhập. Phụ trách
        xét duyệt đơn đăng ký tham gia của thành viên, tiếp nhận những phản hồi từ phía các thành viên về hoạt động của
        WLIN và CLB để kịp thời đề xuất những điều chỉnh, thay đổi cho kịp thời nhằm giúp cho WLIN phát triển mạnh hơn
        và hoàn thiện hơn.<br />
        2.2.3. Phó chủ tịch phụ trách tổ chức sự kiện cho CLB: Là bộ phận xây dựng nội dung cũng như tổ chức các sự kiện
        cho CLB được hiệu quả hơn và góp phần hỗ trợ gắn kết các thành viên hơn. Chuẩn bị cho công tác setup thứ 5 hàng
        tuần như máy chiếu, loa đài và chuẩn bị quà sinh nhật cho các hội viên<br />
        2.2.4. Phó chủ tịch phụ trách phong trào: Phụ trách tạo năng lượng vào 5′ khởi động đầu tiên để xoá tan khoảng
        cách và tạo sự gắn kết cho các thành viên.<br />
        2.2.5. Phó chủ tịch phụ trách nội dung: Chuyên trách về các ý tưởng Nội dung chia sẻ hàng tuần hiệu quả cho các
        thành viên, kiểm duyệt các Nội dung của những người đăng ký thuyết trình<br />
        2.3. Bộ phận hỗ trợ:<br />
        2.3.1. Thư ký / Thủ Quỹ: Là người phụ trách xây dựng chương trình sinh hoạt tuần, thông tin cho các thành viên
        về nội dung, lịch trình, địa điểm sinh hoạt của CLB. Phụ trách thu phí tham dự tuần và thanh toán các phí sinh
        hoạt tuần cho địa điểm được CLB chọn để sinh hoạt.<br />
        2.3.2. Người điều hành buổi sinh hoạt tuần: Là người dẫn dắt và kết nối các buổi họp mặt hàng tuần, giữ lịch
        trình của sự kiện, nhắc nhở các thành viên tham gia kết nối trong sự kiện.<br />
    </div>
</section>
<!-- Ban Lanh Dao -->

<!-- Van hoa -->
<section data-aos="fade-up" data-aos-duration="1500" class="container-fluid yl-bg px-5 py-5 mt-5">
    <div class="text-center pb-5">
        <p class="title-dark">Văn hoá doanh nghiệp</p>
    </div>

    <div class="row d-flex justify-content-between px-5 pb-5">
        <div class="col-md-3 mt-4 text-center">
            <img src="./Images/NTH-1.png" alt="..." style="margin-top: -80px;" />
        </div>

        <div class="founder-intro col-md-7 mt-4 d-flex align-items-center">

            <span>
                <h4 class="pb-3">“Kết Nối Để Khoẻ Đẹp hơn - Thành Công Hơn và Hạnh Phúc Hơn”</h4>
                WLIN hiểu rằng phụ nữ đóng vai trò vô cùng quan trọng trong việc giữ gìn hạnh phúc gia đình, trong việc
                nuôi dạy con cái và đóng góp không nhỏ vào sự phát triển của cộng đồng trong nước cũng như toàn thế
                giới. Đối với phụ nữ điều họ quan tâm không chỉ là thành công trong công việc mà còn phải cảm thấy hạnh
                phúc trong cuộc sống và khi họ hạnh phúc họ sẽ làm cả thế giới hạnh phúc. Do vậy WLIN luôn tạo ra một
                môi trường thân thiện, mang tính gắn kết cao giữa các thành viên trong mạng lưới để họ có khả năng phát
                triển được các mối quan hệ cho bản thân nhằm giúp cho công việc được thuận lợi và cuộc sống thêm thú vị.
                Bạn sẽ không thể thành công nếu thiếu sự hỗ trợ của bạn bè và bạn sẽ không thể hạnh phúc nếu đơn độc, do
                vậy khi tham gia WLIN bạn sẽ chủ động kết nối với những người phụ nữ khác trong mạng lưới để thành công
                hơn và hạnh phúc hơn.
            </span>
        </div>
    </div>

    <div class="row d-flex flex-row-reverse justify-content-between px-5 mt-5">
        <div class="col-md-3 mt-4 text-center" style="margin-top: -50px;">
            <!-- <img src="./Images/NTH-1.png" alt="..." /> -->
        </div>

        <div class="founder-intro col-md-7 mt-4 d-flex align-items-center">
            <span>
                <h4 class="pb-3">Sứ mệnh của WLIN</h4>
                Sứ mệnh của WLIN là kết nối những nữ lãnh đạo trên toàn thế giới lại với nhau để cùng đem đến những điều
                tốt đẹp không chỉ cho bản thân mỗi người, mỗi gia đình hay mỗi quốc gia mà còn xây dựng lên một thế giới
                tốt đẹp hơn cho thế hệ tương lai.
                WLIN sẽ đồng hành với những người phụ nữ trong hành trình hoàn thiện bản thân, nâng cao kỹ năng lãnh
                đạo, khả năng kết nối cũng như các phương thức sử dụng các mối quan hệ một cách hiệu quả và tích cực
                nhằm giúp họ phát triển công việc kinh doanh cũng như chăm sóc gia đình để ngày càng “ Đẹp hơn, Thành
                Công Hơn & Hạnh Phúc Hơn”.
            </span>
        </div>
    </div>
</section>
<!-- Van hoa -->

<!-- Doi tac chien luoc -->
<section data-aos="fade-up" data-aos-duration="1500" class="leader container-fluid px-5 py-5">
    <div class="text-center pb-5">
        <p class="title-dark">Đối tác chiến lược</p>
    </div>
</section>
<!-- Doi tac chien luoc -->




<script>
    AOS.init();
</script>