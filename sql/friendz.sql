
CREATE TABLE `chat` (
  `ID_NO` smallint(6) NOT NULL,
  `chat` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `pic` varchar(250) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `chat` (`ID_NO`, `chat`, `name`, `pic`, `date`) VALUES
(1, 'hello', 'oche', 'friendz_oche_32391.jpg', '03-10-19 @ 12:57 PM');


CREATE TABLE `emotion` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `emotion` (`id`, `name`, `image`) VALUES
(1, 'happy', 'happy.png'),
(2, 'sad', 'sad.png'),
(3, 'cool', 'cool.png'),
(4, 'love', 'love.png');

CREATE TABLE `login` (
  `ID_NO` smallint(6) NOT NULL,
  `name` varchar(250) NOT NULL,
  `passkey` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `music` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `song` varchar(200) NOT NULL,
  `emotion` varchar(20) NOT NULL,
  `date_created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `music` (`id`, `name`, `song`, `emotion`, `date_created`) VALUES
(1, 'hello by adele', 'happy.mp3', 'happy', '12/4/2019'),
(2, 'angry bird', 'sad.mp3', 'sad', '12/4/2020');

CREATE TABLE `reg` (
  `ID_NO` smallint(6) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `passkey` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `lga` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `pix` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `reg` (`ID_NO`, `fname`, `mname`, `sname`, `uname`, `passkey`, `address`, `phone_no`, `occupation`, `gender`, `state`, `lga`, `day`, `month`, `year`, `pix`, `date`) VALUES
(1, 'tyyutuy', 'yfyfuy', 'ufyufuy', 'oche', '123456', 'ytdrtduyf', '087578', 'Employed', 'Male', 'jbytd', 'mjbguuy', '29', 'October', '2000', 'friendz_oche_32391.jpg', '03/10/19 @ 12:50 PM');


ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID_NO`);

--
-- Indexes for table `emotion`
--
ALTER TABLE `emotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID_NO`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `reg`
  ADD PRIMARY KEY (`ID_NO`);

ALTER TABLE `chat`
  MODIFY `ID_NO` smallint(6) NOT NULL AUTO_INCREMENT;
ALTER TABLE `emotion`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
ALTER TABLE `login`
  MODIFY `ID_NO` smallint(6) NOT NULL AUTO_INCREMENT;
ALTER TABLE `music`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
ALTER TABLE `reg`
  MODIFY `ID_NO` smallint(6) NOT NULL AUTO_INCREMENT;
