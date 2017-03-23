use Libros;
CREATE TABLE `libro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Bolcant dades de la taula `libro`
--

INSERT INTO `libro` (`id`, `titulo`, `autor`, `descripcion`) VALUES
(1, 'hola alcoy', 'java', 'introduccion a la informatica'),
(2, 'hola mundo', 'java', 'introduccion a la informatica'),
(3, 'Hola asdf', 'PHP', 'introduccion a php'),
(4, 'maa', 'aço ', 'va o que?'),
(5, 'manolo', 'manolo', 'manolo'),
(6, 'yuuuuuu', 'yee', 'yee'),
(7, 'aaa', 'aaa', 'aa'),
(8, 'e si?', 'aaa', 'aaa'),
(9, 'asdfasdf', 'asdfasdf', 'asdf'),
(10, 'aaaaaaa', 'qqq', 'qqq');

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
