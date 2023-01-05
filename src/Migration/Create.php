<?php

// use PDO;

require __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable( __DIR__ . '/../../' ); 
$dotenv->load();

$connectionDB = new PDO("{$_ENV['DB_PATH']}:host={$_ENV['HOST']};port={$_ENV['PORT']}", "{$_ENV['USER_NAME']}", "{$_ENV['PASSWORD']}");


$sqlCreateDb = "
CREATE DATABASE {$_ENV['DBNAME']} WITH ENCODING 'UTF8';
";

$createDB = $connectionDB->exec($sqlCreateDb);


$tableConfig = "SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;



ALTER SCHEMA public OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;";


$tableCarro = 
"CREATE TABLE public.carro (
    carro_id integer NOT NULL,
    carro_name character varying(255) NOT NULL,
    price numeric NOT NULL,
    marca_id integer,
    top_speed numeric NOT NULL,
    acceleration numeric NOT NULL,
    braking numeric NOT NULL,
    traction numeric NOT NULL,
    description character varying(255) NOT NULL,
    carro_src character varying(255),
    seat numeric,
    carro_trash boolean DEFAULT false
);


ALTER TABLE public.carro OWNER TO postgres;


CREATE SEQUENCE public.carro_carro_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.carro_carro_id_seq OWNER TO postgres;


ALTER SEQUENCE public.carro_carro_id_seq OWNED BY public.carro.carro_id;";



$tableCompra = 
"CREATE TABLE public.compra (
    compra_id integer NOT NULL,
    carro_id integer,
    usuario_id integer,
    color character varying(125),
    compra_price numeric
);


ALTER TABLE public.compra OWNER TO postgres;


CREATE SEQUENCE public.compra_compra_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.compra_compra_id_seq OWNER TO postgres;


ALTER SEQUENCE public.compra_compra_id_seq OWNED BY public.compra.compra_id;";



$tableMarca = 
"CREATE TABLE public.marca (
    marca_id integer NOT NULL,
    marca_name character varying(255) NOT NULL,
    marca_src character varying(255) NOT NULL,
    marca_trash boolean DEFAULT false
);


ALTER TABLE public.marca OWNER TO postgres;


CREATE SEQUENCE public.marca_marca_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.marca_marca_id_seq OWNER TO postgres;


ALTER SEQUENCE public.marca_marca_id_seq OWNED BY public.marca.marca_id;";



$tableUsuario = 
"CREATE TABLE public.usuario (
    usuario_id integer NOT NULL,
    usuario_name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    adm boolean,
    usuario_trash boolean DEFAULT false
);


ALTER TABLE public.usuario OWNER TO postgres;


CREATE SEQUENCE public.usuario_usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_usuario_id_seq OWNER TO postgres;";



$tableKeyConfig = "ALTER SEQUENCE public.usuario_usuario_id_seq OWNED BY public.usuario.usuario_id;


ALTER TABLE ONLY public.carro ALTER COLUMN carro_id SET DEFAULT nextval('public.carro_carro_id_seq'::regclass);


ALTER TABLE ONLY public.compra ALTER COLUMN compra_id SET DEFAULT nextval('public.compra_compra_id_seq'::regclass);


ALTER TABLE ONLY public.marca ALTER COLUMN marca_id SET DEFAULT nextval('public.marca_marca_id_seq'::regclass);


ALTER TABLE ONLY public.usuario ALTER COLUMN usuario_id SET DEFAULT nextval('public.usuario_usuario_id_seq'::regclass);


ALTER TABLE ONLY public.carro
    ADD CONSTRAINT carro_pkey PRIMARY KEY (carro_id);


ALTER TABLE ONLY public.compra
    ADD CONSTRAINT compra_pkey PRIMARY KEY (compra_id);


ALTER TABLE ONLY public.marca
    ADD CONSTRAINT marca_pkey PRIMARY KEY (marca_id);


ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (usuario_id);


ALTER TABLE ONLY public.compra
    ADD CONSTRAINT fk_compra_usuario FOREIGN KEY (usuario_id) REFERENCES public.usuario(usuario_id);


ALTER TABLE ONLY public.carro
    ADD CONSTRAINT fk_employee_department FOREIGN KEY (marca_id) REFERENCES public.marca(marca_id);


ALTER TABLE ONLY public.compra
    ADD CONSTRAINT fk_tests_students FOREIGN KEY (carro_id) REFERENCES public.carro(carro_id);


REVOKE USAGE ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO PUBLIC;";



$tableCreate = $tableConfig . $tableCarro . $tableCompra . $tableMarca . $tableUsuario . $tableKeyConfig;



$connectionCT = new PDO("{$_ENV['DB_PATH']}:host={$_ENV['HOST']};port={$_ENV['PORT']};dbname={$_ENV['DBNAME']}", "{$_ENV['USER_NAME']}", "{$_ENV['PASSWORD']}");

$createCT = $connectionCT->exec($tableCreate);
