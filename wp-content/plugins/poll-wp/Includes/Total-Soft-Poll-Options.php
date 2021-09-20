<?php
	if(!defined('ABSPATH')) exit;
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	require_once(dirname(__FILE__) . '/Total-Soft-Poll-Preview.php');
	require_once(dirname(__FILE__) . '/Total-Soft-Poll-Check.php');
	require_once(dirname(__FILE__) . '/Total-Soft-Pricing.php');
	global $wpdb;
	$table_name1  = $wpdb->prefix . "totalsoft_poll_manager";
	$table_name4  = $wpdb->prefix . "totalsoft_poll_dbt";
	$table_name5  = $wpdb->prefix . "totalsoft_poll_stpoll";
	$table_name8  = $wpdb->prefix . "totalsoft_poll_stpoll_1";
	$table_name9  = $wpdb->prefix . "totalsoft_poll_impoll";
	$table_name10 = $wpdb->prefix . "totalsoft_poll_impoll_1";
	$table_name11 = $wpdb->prefix . "totalsoft_poll_stwibu";
	$table_name12 = $wpdb->prefix . "totalsoft_poll_stwibu_1";
	$table_name13 = $wpdb->prefix . "totalsoft_poll_imwibu";
	$table_name14 = $wpdb->prefix . "totalsoft_poll_imwibu_1";
	$table_name16 = $wpdb->prefix . "totalsoft_poll_iminqu";
	$table_name17 = $wpdb->prefix . "totalsoft_poll_iminqu_1";

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(check_admin_referer( 'edit-menu_', 'TS_Poll_Nonce' ))
		{
			$TotalSoft_Poll_TTitle = str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_TTitle'])));
			$TotalSoft_Poll_TType = sanitize_text_field($_POST['TotalSoft_Poll_TType']);

			// Standart Poll
			$TotalSoft_Poll_1_MW = sanitize_text_field($_POST['TotalSoft_Poll_1_MW']); $TotalSoft_Poll_1_Pos = sanitize_text_field($_POST['TotalSoft_Poll_1_Pos']); $TotalSoft_Poll_1_BW = sanitize_text_field($_POST['TotalSoft_Poll_1_BW']); $TotalSoft_Poll_1_BR = sanitize_text_field($_POST['TotalSoft_Poll_1_BR']); $TotalSoft_Poll_1_BC = sanitize_text_field($_POST['TotalSoft_Poll_1_BC']); $TotalSoft_Poll_1_BoxSh_Type = sanitize_text_field($_POST['TotalSoft_Poll_1_BoxSh_Type']); $TotalSoft_Poll_1_BoxShC = sanitize_text_field($_POST['TotalSoft_Poll_1_BoxShC']); $TotalSoft_Poll_1_Q_FS = sanitize_text_field($_POST['TotalSoft_Poll_1_Q_FS']); $TotalSoft_Poll_1_Q_BgC = sanitize_text_field($_POST['TotalSoft_Poll_1_Q_BgC']); $TotalSoft_Poll_1_Q_C = sanitize_text_field($_POST['TotalSoft_Poll_1_Q_C']); $TotalSoft_Poll_1_LAQ_C = sanitize_text_field($_POST['TotalSoft_Poll_1_LAQ_C']); $TotalSoft_Poll_1_Q_FF = sanitize_text_field($_POST['TotalSoft_Poll_1_Q_FF']); $TotalSoft_Poll_1_Q_TA = sanitize_text_field($_POST['TotalSoft_Poll_1_Q_TA']); $TotalSoft_Poll_1_LAQ_W = sanitize_text_field($_POST['TotalSoft_Poll_1_LAQ_W']); $TotalSoft_Poll_1_LAQ_H = sanitize_text_field($_POST['TotalSoft_Poll_1_LAQ_H']); $TotalSoft_Poll_1_LAQ_S = sanitize_text_field($_POST['TotalSoft_Poll_1_LAQ_S']); $TotalSoft_Poll_1_A_FS = sanitize_text_field($_POST['TotalSoft_Poll_1_A_FS']); $TotalSoft_Poll_1_VB_Pos = isset($_POST['TotalSoft_Poll_1_VB_Pos']) ? sanitize_text_field($_POST['TotalSoft_Poll_1_VB_Pos']) : null; $TotalSoft_Poll_1_VB_BW = isset($_POST['TotalSoft_Poll_1_VB_BW']) ?  sanitize_text_field($_POST['TotalSoft_Poll_1_VB_BW']):null; $TotalSoft_Poll_1_VB_BR = isset($_POST['TotalSoft_Poll_1_VB_BR']) ? sanitize_text_field($_POST['TotalSoft_Poll_1_VB_BR']):null; $TotalSoft_Poll_1_VB_FS = isset($_POST['TotalSoft_Poll_1_VB_FS']) ? sanitize_text_field($_POST['TotalSoft_Poll_1_VB_FS']) : null; $TotalSoft_Poll_1_VB_FF = isset($_POST['TotalSoft_Poll_1_VB_FF']) ? sanitize_text_field($_POST['TotalSoft_Poll_1_VB_FF']) : null ; $TotalSoft_Poll_1_VB_Text = isset($_POST['TotalSoft_Poll_1_VB_Text']) ? str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_1_VB_Text']))) : null; $TotalSoft_Poll_1_VB_IA = isset($_POST['TotalSoft_Poll_1_VB_IA']) ?  sanitize_text_field($_POST['TotalSoft_Poll_1_VB_IA']) : null; $TotalSoft_Poll_1_VB_IS =isset($_POST['TotalSoft_Poll_1_VB_IS'])? sanitize_text_field($_POST['TotalSoft_Poll_1_VB_IS']):null; $TotalSoft_Poll_1_RB_Pos = isset($_POST['TotalSoft_Poll_1_RB_Pos'])? sanitize_text_field($_POST['TotalSoft_Poll_1_RB_Pos']):null; $TotalSoft_Poll_1_RB_BW = isset($_POST['TotalSoft_Poll_1_RB_BW'])? sanitize_text_field($_POST['TotalSoft_Poll_1_RB_BW']):null; $TotalSoft_Poll_1_RB_BR = isset($_POST['TotalSoft_Poll_1_RB_BR'])? sanitize_text_field($_POST['TotalSoft_Poll_1_RB_BR']):null; $TotalSoft_Poll_1_RB_FS = isset($_POST['TotalSoft_Poll_1_RB_FS']) ?sanitize_text_field($_POST['TotalSoft_Poll_1_RB_FS']):null; $TotalSoft_Poll_1_RB_FF = isset($_POST['TotalSoft_Poll_1_RB_FF'])? sanitize_text_field($_POST['TotalSoft_Poll_1_RB_FF']):null; $TotalSoft_Poll_1_RB_Text =  isset($_POST['TotalSoft_Poll_1_RB_Text'])?  str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_1_RB_Text']))):null; $TotalSoft_Poll_1_RB_IA = isset($_POST['TotalSoft_Poll_1_RB_IA'])? sanitize_text_field($_POST['TotalSoft_Poll_1_RB_IA']):null; 
			$TotalSoft_Poll_1_RB_IS =   isset($_POST['TotalSoft_Poll_1_RB_IS'])? sanitize_text_field($_POST['TotalSoft_Poll_1_RB_IS']):null; $TotalSoft_Poll_1_P_BW = isset($_POST['TotalSoft_Poll_1_P_BW'])? sanitize_text_field($_POST['TotalSoft_Poll_1_P_BW']):null; $TotalSoft_Poll_1_P_LAQ_W =isset($_POST['TotalSoft_Poll_1_P_LAQ_W'])? sanitize_text_field($_POST['TotalSoft_Poll_1_P_LAQ_W']):null; $TotalSoft_Poll_1_P_LAQ_H = isset($_POST['TotalSoft_Poll_1_P_LAQ_H'])?sanitize_text_field($_POST['TotalSoft_Poll_1_P_LAQ_H']):null; $TotalSoft_Poll_1_P_LAQ_S = isset($_POST['TotalSoft_Poll_1_P_LAQ_S'])?sanitize_text_field($_POST['TotalSoft_Poll_1_P_LAQ_S']):null; $TotalSoft_Poll_1_P_LAA_W = isset($_POST['TotalSoft_Poll_1_P_LAA_W'])?sanitize_text_field($_POST['TotalSoft_Poll_1_P_LAA_W']):null; $TotalSoft_Poll_1_P_LAA_H = isset($_POST['TotalSoft_Poll_1_P_LAA_H'])?sanitize_text_field($_POST['TotalSoft_Poll_1_P_LAA_H']):null; $TotalSoft_Poll_1_P_LAA_S = isset($_POST['TotalSoft_Poll_1_P_LAA_S'])? sanitize_text_field($_POST['TotalSoft_Poll_1_P_LAA_S']):null; $TotalSoft_Poll_1_P_BB_Pos =  isset($_POST['TotalSoft_Poll_1_P_BB_Pos'])?sanitize_text_field($_POST['TotalSoft_Poll_1_P_BB_Pos']):null; $TotalSoft_Poll_1_P_BB_Text = isset($_POST['TotalSoft_Poll_1_P_BB_Text'])? str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_1_P_BB_Text']))):null; $TotalSoft_Poll_1_P_BB_IA = isset($_POST['TotalSoft_Poll_1_P_BB_IA'])? sanitize_text_field($_POST['TotalSoft_Poll_1_P_BB_IA']):null;

			$TotalSoft_Poll_1_A_CTF =  isset($_POST['TotalSoft_Poll_1_A_CTF'])?sanitize_text_field($_POST['TotalSoft_Poll_1_A_CTF']):null;
			if($TotalSoft_Poll_1_A_CTF == 'on'){ $TotalSoft_Poll_1_A_CTF = 'true'; }else{ $TotalSoft_Poll_1_A_CTF = 'false'; }
			$TotalSoft_Poll_1_A_FS = sanitize_text_field($_POST['TotalSoft_Poll_1_A_FS']); 
			$TotalSoft_Poll_1_A_MBgC = sanitize_text_field($_POST['TotalSoft_Poll_1_A_MBgC']);
			$TotalSoft_Poll_1_A_BgC = sanitize_text_field($_POST['TotalSoft_Poll_1_A_BgC']);
			$TotalSoft_Poll_1_A_C = sanitize_text_field($_POST['TotalSoft_Poll_1_A_C']);
			$TotalSoft_Poll_1_BoxSh = sanitize_text_field($_POST['TotalSoft_Poll_1_BoxSh']); 
			$TotalSoft_Poll_1_LAA_W = sanitize_text_field($_POST['TotalSoft_Poll_1_LAA_W']);  
			$TotalSoft_Poll_1_LAA_H = sanitize_text_field($_POST['TotalSoft_Poll_1_LAA_H']);
			$TotalSoft_Poll_1_LAA_C = sanitize_text_field($_POST['TotalSoft_Poll_1_LAA_C']);
			$TotalSoft_Poll_1_LAA_S = sanitize_text_field($_POST['TotalSoft_Poll_1_LAA_S']); 
			$TotalSoft_Poll_1_CH_CM = isset($_POST['TotalSoft_Poll_1_CH_CM'])?  sanitize_text_field($_POST['TotalSoft_Poll_1_CH_CM']):null; 
			if($TotalSoft_Poll_1_CH_CM == 'on'){ $TotalSoft_Poll_1_CH_CM = 'true'; }else{ $TotalSoft_Poll_1_CH_CM = 'false'; }
			$TotalSoft_Poll_1_CH_S = sanitize_text_field($_POST['TotalSoft_Poll_1_CH_S']); 
			$TotalSoft_Poll_1_CH_TBC = sanitize_text_field($_POST['TotalSoft_Poll_1_CH_TBC']);
			$TotalSoft_Poll_1_CH_CBC = sanitize_text_field($_POST['TotalSoft_Poll_1_CH_CBC']);
			$TotalSoft_Poll_1_CH_TAC = sanitize_text_field($_POST['TotalSoft_Poll_1_CH_TAC']); 
			$TotalSoft_Poll_1_A_HBgC = sanitize_text_field($_POST['TotalSoft_Poll_1_A_HBgC']); 
			$TotalSoft_Poll_1_A_HC = sanitize_text_field($_POST['TotalSoft_Poll_1_A_HC']);
			$TotalSoft_Poll_1_CH_CAC = sanitize_text_field($_POST['TotalSoft_Poll_1_CH_CAC']);



			//Image/Video Poll
			$TotalSoft_Poll_2_MW = sanitize_text_field($_POST['TotalSoft_Poll_2_MW']); $TotalSoft_Poll_2_BC = sanitize_text_field($_POST['TotalSoft_Poll_2_BC']); $TotalSoft_Poll_2_BoxSh_Type = sanitize_text_field($_POST['TotalSoft_Poll_2_BoxSh_Type']); $TotalSoft_Poll_2_BoxShC = sanitize_text_field($_POST['TotalSoft_Poll_2_BoxShC']); $TotalSoft_Poll_2_Q_BgC = sanitize_text_field($_POST['TotalSoft_Poll_2_Q_BgC']); $TotalSoft_Poll_2_Q_C = sanitize_text_field($_POST['TotalSoft_Poll_2_Q_C']); $TotalSoft_Poll_2_LAQ_C = sanitize_text_field($_POST['TotalSoft_Poll_2_LAQ_C']); $TotalSoft_Poll_2_Pos = sanitize_text_field($_POST['TotalSoft_Poll_2_Pos']); $TotalSoft_Poll_2_BW = sanitize_text_field($_POST['TotalSoft_Poll_2_BW']); $TotalSoft_Poll_2_BR = sanitize_text_field($_POST['TotalSoft_Poll_2_BR']); $TotalSoft_Poll_2_BoxSh = sanitize_text_field($_POST['TotalSoft_Poll_2_BoxSh']); $TotalSoft_Poll_2_Q_FS = sanitize_text_field($_POST['TotalSoft_Poll_2_Q_FS']); $TotalSoft_Poll_2_Q_FF = sanitize_text_field($_POST['TotalSoft_Poll_2_Q_FF']); $TotalSoft_Poll_2_Q_TA = sanitize_text_field($_POST['TotalSoft_Poll_2_Q_TA']); $TotalSoft_Poll_2_LAQ_W = sanitize_text_field($_POST['TotalSoft_Poll_2_LAQ_W']); $TotalSoft_Poll_2_LAQ_H = sanitize_text_field($_POST['TotalSoft_Poll_2_LAQ_H']); $TotalSoft_Poll_2_LAQ_S = sanitize_text_field($_POST['TotalSoft_Poll_2_LAQ_S']); $TotalSoft_Poll_2_A_CC = sanitize_text_field($_POST['TotalSoft_Poll_2_A_CC']); $TotalSoft_Poll_2_A_BgC = sanitize_text_field($_POST['TotalSoft_Poll_2_A_BgC']); $TotalSoft_Poll_2_A_MBgC = sanitize_text_field($_POST['TotalSoft_Poll_2_A_MBgC']); $TotalSoft_Poll_2_A_C = sanitize_text_field($_POST['TotalSoft_Poll_2_A_C']); $TotalSoft_Poll_2_A_CA = sanitize_text_field($_POST['TotalSoft_Poll_2_A_CA']); $TotalSoft_Poll_2_A_FS = sanitize_text_field($_POST['TotalSoft_Poll_2_A_FS']); $TotalSoft_Poll_2_A_Pos = sanitize_text_field($_POST['TotalSoft_Poll_2_A_Pos']); $TotalSoft_Poll_2_CH_S = sanitize_text_field($_POST['TotalSoft_Poll_2_CH_S']); $TotalSoft_Poll_2_LAA_W = sanitize_text_field($_POST['TotalSoft_Poll_2_LAA_W']); $TotalSoft_Poll_2_LAA_C = sanitize_text_field($_POST['TotalSoft_Poll_2_LAA_C']); $TotalSoft_Poll_2_LAA_H = sanitize_text_field($_POST['TotalSoft_Poll_2_LAA_H']); $TotalSoft_Poll_2_LAA_S = sanitize_text_field($_POST['TotalSoft_Poll_2_LAA_S']); $TotalSoft_Poll_2_CH_CM = isset($_POST['TotalSoft_Poll_2_CH_CM'])?sanitize_text_field($_POST['TotalSoft_Poll_2_CH_CM']):null; $TotalSoft_Poll_2_CH_CBC = sanitize_text_field($_POST['TotalSoft_Poll_2_CH_CBC']); $TotalSoft_Poll_2_CH_TAC = sanitize_text_field($_POST['TotalSoft_Poll_2_CH_TAC']); $TotalSoft_Poll_2_CH_CAC = sanitize_text_field($_POST['TotalSoft_Poll_2_CH_CAC']); $TotalSoft_Poll_2_A_HBgC = sanitize_text_field($_POST['TotalSoft_Poll_2_A_HBgC']); $TotalSoft_Poll_2_A_HC = sanitize_text_field($_POST['TotalSoft_Poll_2_A_HC']); $TotalSoft_Poll_2_CH_TBC = sanitize_text_field($_POST['TotalSoft_Poll_2_CH_TBC']); $TotalSoft_Poll_2_A_HSh_Show =  isset($_POST['TotalSoft_Poll_2_A_HSh_Show'])?sanitize_text_field($_POST['TotalSoft_Poll_2_A_HSh_Show']):null; $TotalSoft_Poll_2_A_HShC = sanitize_text_field($_POST['TotalSoft_Poll_2_A_HShC']); $TotalSoft_Poll_2_Play_IC = sanitize_text_field($_POST['TotalSoft_Poll_2_Play_IC']); $TotalSoft_Poll_2_VB_Pos =isset($_POST['TotalSoft_Poll_2_VB_Pos'])? sanitize_text_field($_POST['TotalSoft_Poll_2_VB_Pos']):null; $TotalSoft_Poll_2_VB_BW = isset($_POST['TotalSoft_Poll_2_VB_BW'])?sanitize_text_field($_POST['TotalSoft_Poll_2_VB_BW']):null; $TotalSoft_Poll_2_Play_IOvC = sanitize_text_field($_POST['TotalSoft_Poll_2_Play_IOvC']); $TotalSoft_Poll_2_Play_IT = sanitize_text_field($_POST['TotalSoft_Poll_2_Play_IT']); $TotalSoft_Poll_2_Play_IS = sanitize_text_field($_POST['TotalSoft_Poll_2_Play_IS']);
			$TotalSoft_Poll_2_VB_BR = isset($_POST['TotalSoft_Poll_2_VB_BR'])?sanitize_text_field($_POST['TotalSoft_Poll_2_VB_BR']):null; $TotalSoft_Poll_2_VB_FS =isset($_POST['TotalSoft_Poll_2_VB_FS'])? sanitize_text_field($_POST['TotalSoft_Poll_2_VB_FS']):null; $TotalSoft_Poll_2_VB_FF =isset($_POST['TotalSoft_Poll_2_VB_FF'])? sanitize_text_field($_POST['TotalSoft_Poll_2_VB_FF']):null; $TotalSoft_Poll_2_VB_Text = isset($_POST['TotalSoft_Poll_2_VB_Text'])?str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_2_VB_Text']))):null; $TotalSoft_Poll_2_VB_IA = isset($_POST['TotalSoft_Poll_2_VB_IA'])? sanitize_text_field($_POST['TotalSoft_Poll_2_VB_IA']):null; $TotalSoft_Poll_2_VB_IS =  isset($_POST['TotalSoft_Poll_2_VB_IS'])? sanitize_text_field($_POST['TotalSoft_Poll_2_VB_IS']):null; $TotalSoft_Poll_2_RB_Pos =isset($_POST['TotalSoft_Poll_2_RB_Pos'])?sanitize_text_field($_POST['TotalSoft_Poll_2_RB_Pos']):null; $TotalSoft_Poll_2_RB_BW =isset($_POST['TotalSoft_Poll_2_RB_BW'])? sanitize_text_field($_POST['TotalSoft_Poll_2_RB_BW']):null; $TotalSoft_Poll_2_RB_BR = isset($_POST['TotalSoft_Poll_2_RB_BR'])? sanitize_text_field($_POST['TotalSoft_Poll_2_RB_BR']):null; $TotalSoft_Poll_2_RB_FS = isset($_POST['TotalSoft_Poll_2_RB_FS'])?sanitize_text_field($_POST['TotalSoft_Poll_2_RB_FS']):null; $TotalSoft_Poll_2_RB_FF =  isset($_POST['TotalSoft_Poll_2_RB_FF'])?sanitize_text_field($_POST['TotalSoft_Poll_2_RB_FF']):null; $TotalSoft_Poll_2_RB_Text =  isset($_POST['TotalSoft_Poll_2_RB_Text'])? str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_2_RB_Text']))):null; $TotalSoft_Poll_2_RB_IA = isset($_POST['TotalSoft_Poll_2_RB_IA'])?sanitize_text_field($_POST['TotalSoft_Poll_2_RB_IA']):null; $TotalSoft_Poll_2_RB_IS = isset($_POST['TotalSoft_Poll_2_RB_IS'])?sanitize_text_field($_POST['TotalSoft_Poll_2_RB_IS']):null; $TotalSoft_Poll_2_P_BB_Pos =  isset($_POST['TotalSoft_Poll_2_P_BB_Pos'])?sanitize_text_field($_POST['TotalSoft_Poll_2_P_BB_Pos']):null; $TotalSoft_Poll_2_P_BB_Text =isset($_POST['TotalSoft_Poll_2_P_BB_Text'])? str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_2_P_BB_Text']))):null; $TotalSoft_Poll_2_P_BB_IA = isset($_POST['TotalSoft_Poll_2_P_BB_IA'])?sanitize_text_field($_POST['TotalSoft_Poll_2_P_BB_IA']):null;
			$TotalSoft_Poll_2_A_IHT = sanitize_text_field($_POST['TotalSoft_Poll_2_A_IHT']);
			if($TotalSoft_Poll_2_A_IHT == 'fixed')
			{
				$TotalSoft_Poll_2_A_IH = sanitize_text_field($_POST['TotalSoft_Poll_2_A_IH']);
			}
			else
			{
				$TotalSoft_Poll_2_A_IH = sanitize_text_field($_POST['TotalSoft_Poll_2_A_IHR']);
			}
			if($TotalSoft_Poll_2_CH_CM == 'on'){ $TotalSoft_Poll_2_CH_CM = 'true'; }else{ $TotalSoft_Poll_2_CH_CM = 'false'; }
			if($TotalSoft_Poll_2_A_HSh_Show == 'on'){ $TotalSoft_Poll_2_A_HSh_Show = 'true'; }else{ $TotalSoft_Poll_2_A_HSh_Show = 'false'; }

			//Standart Without Button
			$TotalSoft_Poll_3_MW = sanitize_text_field($_POST['TotalSoft_Poll_3_MW']); $TotalSoft_Poll_3_BC = sanitize_text_field($_POST['TotalSoft_Poll_3_BC']); $TotalSoft_Poll_3_BoxSh_Type = sanitize_text_field($_POST['TotalSoft_Poll_3_BoxSh_Type']); $TotalSoft_Poll_3_BoxShC = sanitize_text_field($_POST['TotalSoft_Poll_3_BoxShC']); $TotalSoft_Poll_3_Q_BgC = sanitize_text_field($_POST['TotalSoft_Poll_3_Q_BgC']); $TotalSoft_Poll_3_Q_C = sanitize_text_field($_POST['TotalSoft_Poll_3_Q_C']); $TotalSoft_Poll_3_LAQ_C = sanitize_text_field($_POST['TotalSoft_Poll_3_LAQ_C']); $TotalSoft_Poll_3_Pos = sanitize_text_field($_POST['TotalSoft_Poll_3_Pos']); $TotalSoft_Poll_3_BW = sanitize_text_field($_POST['TotalSoft_Poll_3_BW']); $TotalSoft_Poll_3_BR = sanitize_text_field($_POST['TotalSoft_Poll_3_BR']); $TotalSoft_Poll_3_BoxSh = sanitize_text_field($_POST['TotalSoft_Poll_3_BoxSh']); $TotalSoft_Poll_3_Q_FS = sanitize_text_field($_POST['TotalSoft_Poll_3_Q_FS']); $TotalSoft_Poll_3_Q_FF = sanitize_text_field($_POST['TotalSoft_Poll_3_Q_FF']); $TotalSoft_Poll_3_Q_TA = sanitize_text_field($_POST['TotalSoft_Poll_3_Q_TA']); $TotalSoft_Poll_3_LAQ_W = sanitize_text_field($_POST['TotalSoft_Poll_3_LAQ_W']); $TotalSoft_Poll_3_LAQ_H = sanitize_text_field($_POST['TotalSoft_Poll_3_LAQ_H']); $TotalSoft_Poll_3_LAQ_S = sanitize_text_field($_POST['TotalSoft_Poll_3_LAQ_S']); $TotalSoft_Poll_3_A_FS = sanitize_text_field($_POST['TotalSoft_Poll_3_A_FS']); $TotalSoft_Poll_3_A_BW = sanitize_text_field($_POST['TotalSoft_Poll_3_A_BW']); $TotalSoft_Poll_3_A_BR = sanitize_text_field($_POST['TotalSoft_Poll_3_A_BR']); $TotalSoft_Poll_3_CH_S = sanitize_text_field($_POST['TotalSoft_Poll_3_CH_S']); $TotalSoft_Poll_3_LAA_W = sanitize_text_field($_POST['TotalSoft_Poll_3_LAA_W']); $TotalSoft_Poll_3_LAA_H = sanitize_text_field($_POST['TotalSoft_Poll_3_LAA_H']); $TotalSoft_Poll_3_LAA_S = sanitize_text_field($_POST['TotalSoft_Poll_3_LAA_S']); $TotalSoft_Poll_3_A_CA = sanitize_text_field($_POST['TotalSoft_Poll_3_A_CA']); $TotalSoft_Poll_3_A_FS = sanitize_text_field($_POST['TotalSoft_Poll_3_A_FS']); $TotalSoft_Poll_3_A_MBgC = sanitize_text_field($_POST['TotalSoft_Poll_3_A_MBgC']); $TotalSoft_Poll_3_A_BgC = sanitize_text_field($_POST['TotalSoft_Poll_3_A_BgC']); $TotalSoft_Poll_3_A_C = sanitize_text_field($_POST['TotalSoft_Poll_3_A_C']); $TotalSoft_Poll_3_A_BW = sanitize_text_field($_POST['TotalSoft_Poll_3_A_BW']); $TotalSoft_Poll_3_A_BC = sanitize_text_field($_POST['TotalSoft_Poll_3_A_BC']); $TotalSoft_Poll_3_A_HBgC = sanitize_text_field($_POST['TotalSoft_Poll_3_A_HBgC']); $TotalSoft_Poll_3_A_HC = sanitize_text_field($_POST['TotalSoft_Poll_3_A_HC']); $TotalSoft_Poll_3_CH_Sh = isset($_POST['TotalSoft_Poll_3_CH_Sh'])?sanitize_text_field($_POST['TotalSoft_Poll_3_CH_Sh']):null; $TotalSoft_Poll_3_CH_S = sanitize_text_field($_POST['TotalSoft_Poll_3_CH_S']); $TotalSoft_Poll_3_CH_TBC = sanitize_text_field($_POST['TotalSoft_Poll_3_CH_TBC']); $TotalSoft_Poll_3_CH_CBC = sanitize_text_field($_POST['TotalSoft_Poll_3_CH_CBC']); $TotalSoft_Poll_3_CH_TAC = sanitize_text_field($_POST['TotalSoft_Poll_3_CH_TAC']); $TotalSoft_Poll_3_CH_CAC = sanitize_text_field($_POST['TotalSoft_Poll_3_CH_CAC']); $TotalSoft_Poll_3_LAA_C = sanitize_text_field($_POST['TotalSoft_Poll_3_LAA_C']);
			$TotalSoft_Poll_3_TV_Pos = isset($_POST['TotalSoft_Poll_3_TV_Pos'])?sanitize_text_field($_POST['TotalSoft_Poll_3_TV_Pos']):null; $TotalSoft_Poll_3_TV_FS = isset($_POST['TotalSoft_Poll_3_TV_FS'])?sanitize_text_field($_POST['TotalSoft_Poll_3_TV_FS']):null; $TotalSoft_Poll_3_TV_Text = isset($_POST['TotalSoft_Poll_3_TV_Text'])?str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_3_TV_Text']))):null; $TotalSoft_Poll_3_RB_Pos = isset($_POST['TotalSoft_Poll_3_RB_Pos'])? sanitize_text_field($_POST['TotalSoft_Poll_3_RB_Pos']):null; $TotalSoft_Poll_3_RB_BW = isset($_POST['TotalSoft_Poll_3_RB_BW'])? sanitize_text_field($_POST['TotalSoft_Poll_3_RB_BW']):null; $TotalSoft_Poll_3_RB_BR = isset($_POST['TotalSoft_Poll_3_RB_BR'])?sanitize_text_field($_POST['TotalSoft_Poll_3_RB_BR']):null; $TotalSoft_Poll_3_RB_FS = isset($_POST['TotalSoft_Poll_3_RB_FS'])?sanitize_text_field($_POST['TotalSoft_Poll_3_RB_FS']):null; $TotalSoft_Poll_3_RB_FF = isset($_POST['TotalSoft_Poll_3_RB_FF'])?sanitize_text_field($_POST['TotalSoft_Poll_3_RB_FF']):null; $TotalSoft_Poll_3_RB_Text = isset($_POST['TotalSoft_Poll_3_RB_Text'])?str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_3_RB_Text']))):null; $TotalSoft_Poll_3_RB_IA = isset($_POST['TotalSoft_Poll_3_RB_IA'])?sanitize_text_field($_POST['TotalSoft_Poll_3_RB_IA']):null; $TotalSoft_Poll_3_RB_IS = isset($_POST['TotalSoft_Poll_3_RB_IS'])?sanitize_text_field($_POST['TotalSoft_Poll_3_RB_IS']):null; $TotalSoft_Poll_3_BB_Pos = isset($_POST['TotalSoft_Poll_3_BB_Pos'])? sanitize_text_field($_POST['TotalSoft_Poll_3_BB_Pos']):null; $TotalSoft_Poll_3_BB_Text = isset($_POST['TotalSoft_Poll_3_BB_Text'])? str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_3_BB_Text']))):null; $TotalSoft_Poll_3_BB_IA = isset($_POST['TotalSoft_Poll_3_BB_IA'])? sanitize_text_field($_POST['TotalSoft_Poll_3_BB_IA']):null; $TotalSoft_Poll_3_VT_IA =isset($_POST['TotalSoft_Poll_3_VT_IA'])? sanitize_text_field($_POST['TotalSoft_Poll_3_VT_IA']):null;
			if($TotalSoft_Poll_3_CH_Sh == 'on'){ $TotalSoft_Poll_3_CH_Sh ='true'; }else{ $TotalSoft_Poll_3_CH_Sh = 'false'; }

			//Image/Video Without Button
			$TotalSoft_Poll_4_MW = sanitize_text_field($_POST['TotalSoft_Poll_4_MW']); $TotalSoft_Poll_4_BC = sanitize_text_field($_POST['TotalSoft_Poll_4_BC']); $TotalSoft_Poll_4_BoxSh_Type = sanitize_text_field($_POST['TotalSoft_Poll_4_BoxSh_Type']); $TotalSoft_Poll_4_BoxShC = sanitize_text_field($_POST['TotalSoft_Poll_4_BoxShC']); $TotalSoft_Poll_4_Q_BgC = sanitize_text_field($_POST['TotalSoft_Poll_4_Q_BgC']); $TotalSoft_Poll_4_Q_C = sanitize_text_field($_POST['TotalSoft_Poll_4_Q_C']); $TotalSoft_Poll_4_LAQ_C = sanitize_text_field($_POST['TotalSoft_Poll_4_LAQ_C']); $TotalSoft_Poll_4_Pos = sanitize_text_field($_POST['TotalSoft_Poll_4_Pos']); $TotalSoft_Poll_4_BW = sanitize_text_field($_POST['TotalSoft_Poll_4_BW']); $TotalSoft_Poll_4_BR = sanitize_text_field($_POST['TotalSoft_Poll_4_BR']); $TotalSoft_Poll_4_Q_FS = sanitize_text_field($_POST['TotalSoft_Poll_4_Q_FS']); $TotalSoft_Poll_4_Q_FF = sanitize_text_field($_POST['TotalSoft_Poll_4_Q_FF']); $TotalSoft_Poll_4_Q_TA = sanitize_text_field($_POST['TotalSoft_Poll_4_Q_TA']); $TotalSoft_Poll_4_LAQ_W = sanitize_text_field($_POST['TotalSoft_Poll_4_LAQ_W']); $TotalSoft_Poll_4_LAQ_H = sanitize_text_field($_POST['TotalSoft_Poll_4_LAQ_H']); $TotalSoft_Poll_4_LAQ_S = sanitize_text_field($_POST['TotalSoft_Poll_4_LAQ_S']); $TotalSoft_Poll_4_A_FS = sanitize_text_field($_POST['TotalSoft_Poll_4_A_FS']); $TotalSoft_Poll_4_A_BW = sanitize_text_field($_POST['TotalSoft_Poll_4_A_BW']); $TotalSoft_Poll_4_A_BR = sanitize_text_field($_POST['TotalSoft_Poll_4_A_BR']); $TotalSoft_Poll_4_A_FF = sanitize_text_field($_POST['TotalSoft_Poll_4_A_FF']); $TotalSoft_Poll_4_I_H =isset($_POST['TotalSoft_Poll_4_I_H'])? sanitize_text_field($_POST['TotalSoft_Poll_4_I_H']):null; $TotalSoft_Poll_4_I_Ra =isset($_POST['TotalSoft_Poll_4_I_Ra'])? sanitize_text_field($_POST['TotalSoft_Poll_4_I_Ra']):null; $TotalSoft_Poll_4_I_IS =isset($_POST['TotalSoft_Poll_4_I_IS'])? sanitize_text_field($_POST['TotalSoft_Poll_4_I_IS']):null; $TotalSoft_Poll_4_Pop_BW = isset($_POST['TotalSoft_Poll_4_Pop_BW'])? sanitize_text_field($_POST['TotalSoft_Poll_4_Pop_BW']):null; $TotalSoft_Poll_4_LAA_W = sanitize_text_field($_POST['TotalSoft_Poll_4_LAA_W']); $TotalSoft_Poll_4_LAA_H = sanitize_text_field($_POST['TotalSoft_Poll_4_LAA_H']); $TotalSoft_Poll_4_LAA_S = sanitize_text_field($_POST['TotalSoft_Poll_4_LAA_S']); $TotalSoft_Poll_4_TV_Pos =isset($_POST['TotalSoft_Poll_4_TV_Pos'])? sanitize_text_field($_POST['TotalSoft_Poll_4_TV_Pos']):null; $TotalSoft_Poll_4_A_CA = sanitize_text_field($_POST['TotalSoft_Poll_4_A_CA']); $TotalSoft_Poll_4_A_MBgC = sanitize_text_field($_POST['TotalSoft_Poll_4_A_MBgC']); $TotalSoft_Poll_4_A_BgC = sanitize_text_field($_POST['TotalSoft_Poll_4_A_BgC']); $TotalSoft_Poll_4_A_C = sanitize_text_field($_POST['TotalSoft_Poll_4_A_C']); $TotalSoft_Poll_4_A_BC = sanitize_text_field($_POST['TotalSoft_Poll_4_A_BC']); $TotalSoft_Poll_4_A_HBgC = sanitize_text_field($_POST['TotalSoft_Poll_4_A_HBgC']); $TotalSoft_Poll_4_A_HC = sanitize_text_field($_POST['TotalSoft_Poll_4_A_HC']); $TotalSoft_Poll_4_LAA_C = sanitize_text_field($_POST['TotalSoft_Poll_4_LAA_C']);
			$TotalSoft_Poll_4_TV_FS =isset($_POST['TotalSoft_Poll_4_TV_FS'])? sanitize_text_field($_POST['TotalSoft_Poll_4_TV_FS']):null; $TotalSoft_Poll_4_TV_Text = isset($_POST['TotalSoft_Poll_4_TV_Text'])?str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_4_TV_Text']))):null; $TotalSoft_Poll_4_VT_IA =isset($_POST['TotalSoft_Poll_4_VT_IA'])? sanitize_text_field($_POST['TotalSoft_Poll_4_VT_IA']):null; $TotalSoft_Poll_4_RB_Pos =isset($_POST['TotalSoft_Poll_4_RB_Pos'])? sanitize_text_field($_POST['TotalSoft_Poll_4_RB_Pos']):null; $TotalSoft_Poll_4_RB_BW = isset($_POST['TotalSoft_Poll_4_RB_BW'])?sanitize_text_field($_POST['TotalSoft_Poll_4_RB_BW']):null; $TotalSoft_Poll_4_RB_BR = isset($_POST['TotalSoft_Poll_4_RB_BR'])? sanitize_text_field($_POST['TotalSoft_Poll_4_RB_BR']):null; $TotalSoft_Poll_4_RB_FS = isset($_POST['TotalSoft_Poll_4_RB_FS'])? sanitize_text_field($_POST['TotalSoft_Poll_4_RB_FS']):null; $TotalSoft_Poll_4_RB_FF =isset($_POST['TotalSoft_Poll_4_RB_FF'])?  sanitize_text_field($_POST['TotalSoft_Poll_4_RB_FF']):null; $TotalSoft_Poll_4_RB_Text =isset($_POST['TotalSoft_Poll_4_RB_Text'])? str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_4_RB_Text']))):null; $TotalSoft_Poll_4_RB_IA =isset($_POST['TotalSoft_Poll_4_RB_IA'])? sanitize_text_field($_POST['TotalSoft_Poll_4_RB_IA']):null; $TotalSoft_Poll_4_RB_IS = isset($_POST['TotalSoft_Poll_4_RB_IS'])?sanitize_text_field($_POST['TotalSoft_Poll_4_RB_IS']):null; $TotalSoft_Poll_4_BB_Pos =  isset($_POST['TotalSoft_Poll_4_BB_Pos'])?sanitize_text_field($_POST['TotalSoft_Poll_4_BB_Pos']):null; $TotalSoft_Poll_4_BB_Text =isset($_POST['TotalSoft_Poll_4_BB_Text'])? str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_4_BB_Text']))):null; $TotalSoft_Poll_4_BB_IA = isset($_POST['TotalSoft_Poll_4_BB_IA'])?sanitize_text_field($_POST['TotalSoft_Poll_4_BB_IA']):null;

			//Image/Video in Question
			$TotalSoft_Poll_5_MW = sanitize_text_field($_POST['TotalSoft_Poll_5_MW']); $TotalSoft_Poll_5_BC = sanitize_text_field($_POST['TotalSoft_Poll_5_BC']); $TotalSoft_Poll_5_BoxSh_Type = sanitize_text_field($_POST['TotalSoft_Poll_5_BoxSh_Type']); $TotalSoft_Poll_5_BoxShC = sanitize_text_field($_POST['TotalSoft_Poll_5_BoxShC']); $TotalSoft_Poll_5_Q_BgC = sanitize_text_field($_POST['TotalSoft_Poll_5_Q_BgC']); $TotalSoft_Poll_5_Q_C = sanitize_text_field($_POST['TotalSoft_Poll_5_Q_C']); $TotalSoft_Poll_5_LAQ_C = sanitize_text_field($_POST['TotalSoft_Poll_5_LAQ_C']); $TotalSoft_Poll_5_Pos = sanitize_text_field($_POST['TotalSoft_Poll_5_Pos']); $TotalSoft_Poll_5_BW = sanitize_text_field($_POST['TotalSoft_Poll_5_BW']); $TotalSoft_Poll_5_BR = sanitize_text_field($_POST['TotalSoft_Poll_5_BR']); $TotalSoft_Poll_5_BoxSh = sanitize_text_field($_POST['TotalSoft_Poll_5_BoxSh']); $TotalSoft_Poll_5_Q_FS = sanitize_text_field($_POST['TotalSoft_Poll_5_Q_FS']); $TotalSoft_Poll_5_Q_FF = sanitize_text_field($_POST['TotalSoft_Poll_5_Q_FF']); $TotalSoft_Poll_5_Q_TA = sanitize_text_field($_POST['TotalSoft_Poll_5_Q_TA']); $TotalSoft_Poll_5_I_H = sanitize_text_field($_POST['TotalSoft_Poll_5_I_H']); $TotalSoft_Poll_5_I_Ra = sanitize_text_field($_POST['TotalSoft_Poll_5_I_Ra']); $TotalSoft_Poll_5_V_W = sanitize_text_field($_POST['TotalSoft_Poll_5_V_W']); $TotalSoft_Poll_5_LAQ_W = sanitize_text_field($_POST['TotalSoft_Poll_5_LAQ_W']); $TotalSoft_Poll_5_LAQ_H = sanitize_text_field($_POST['TotalSoft_Poll_5_LAQ_H']); $TotalSoft_Poll_5_LAQ_S = sanitize_text_field($_POST['TotalSoft_Poll_5_LAQ_S']); $TotalSoft_Poll_5_A_FS = sanitize_text_field($_POST['TotalSoft_Poll_5_A_FS']); $TotalSoft_Poll_5_A_BW = sanitize_text_field($_POST['TotalSoft_Poll_5_A_BW']); $TotalSoft_Poll_5_A_BR = sanitize_text_field($_POST['TotalSoft_Poll_5_A_BR']); $TotalSoft_Poll_5_CH_S = sanitize_text_field($_POST['TotalSoft_Poll_5_CH_S']); $TotalSoft_Poll_5_LAA_W = sanitize_text_field($_POST['TotalSoft_Poll_5_LAA_W']); $TotalSoft_Poll_5_LAA_H = sanitize_text_field($_POST['TotalSoft_Poll_5_LAA_H']); $TotalSoft_Poll_5_LAA_S = sanitize_text_field($_POST['TotalSoft_Poll_5_LAA_S']); $TotalSoft_Poll_5_TV_Pos = isset($_POST['TotalSoft_Poll_5_TV_Pos'])? sanitize_text_field($_POST['TotalSoft_Poll_5_TV_Pos']):null; $TotalSoft_Poll_5_TV_FS = isset($_POST['TotalSoft_Poll_5_TV_FS'])?sanitize_text_field($_POST['TotalSoft_Poll_5_TV_FS']):null; $TotalSoft_Poll_5_VT_IA =isset($_POST['TotalSoft_Poll_5_VT_IA'])? sanitize_text_field($_POST['TotalSoft_Poll_5_VT_IA']):null; $TotalSoft_Poll_5_VB_Pos =isset($_POST['TotalSoft_Poll_5_VB_Pos'])?sanitize_text_field($_POST['TotalSoft_Poll_5_VB_Pos']):null; $TotalSoft_Poll_5_VB_BW = isset($_POST['TotalSoft_Poll_5_VB_BW'])?sanitize_text_field($_POST['TotalSoft_Poll_5_VB_BW']):null; $TotalSoft_Poll_5_VB_BR =isset($_POST['TotalSoft_Poll_5_VB_BR'])? sanitize_text_field($_POST['TotalSoft_Poll_5_VB_BR']):null; $TotalSoft_Poll_5_VB_FS =isset($_POST['TotalSoft_Poll_5_VB_FS'])? sanitize_text_field($_POST['TotalSoft_Poll_5_VB_FS']):null; $TotalSoft_Poll_5_VB_FF =isset($_POST['TotalSoft_Poll_5_VB_FF'])? sanitize_text_field($_POST['TotalSoft_Poll_5_VB_FF']):null; $TotalSoft_Poll_5_A_CA = sanitize_text_field($_POST['TotalSoft_Poll_5_A_CA']); $TotalSoft_Poll_5_A_MBgC = sanitize_text_field($_POST['TotalSoft_Poll_5_A_MBgC']); $TotalSoft_Poll_5_A_BgC = sanitize_text_field($_POST['TotalSoft_Poll_5_A_BgC']); $TotalSoft_Poll_5_A_C = sanitize_text_field($_POST['TotalSoft_Poll_5_A_C']); $TotalSoft_Poll_5_A_BC = sanitize_text_field($_POST['TotalSoft_Poll_5_A_BC']); $TotalSoft_Poll_5_A_HBgC = sanitize_text_field($_POST['TotalSoft_Poll_5_A_HBgC']); $TotalSoft_Poll_5_A_HC = sanitize_text_field($_POST['TotalSoft_Poll_5_A_HC']); $TotalSoft_Poll_5_CH_TBC = sanitize_text_field($_POST['TotalSoft_Poll_5_CH_TBC']); $TotalSoft_Poll_5_CH_CBC = sanitize_text_field($_POST['TotalSoft_Poll_5_CH_CBC']); $TotalSoft_Poll_5_CH_TAC = sanitize_text_field($_POST['TotalSoft_Poll_5_CH_TAC']); $TotalSoft_Poll_5_CH_CAC = sanitize_text_field($_POST['TotalSoft_Poll_5_CH_CAC']); $TotalSoft_Poll_5_LAA_C = sanitize_text_field($_POST['TotalSoft_Poll_5_LAA_C']);
			$TotalSoft_Poll_5_VB_IA =isset($_POST['TotalSoft_Poll_5_VB_IA'])?sanitize_text_field($_POST['TotalSoft_Poll_5_VB_IA']):null; $TotalSoft_Poll_5_VB_IS = isset($_POST['TotalSoft_Poll_5_VB_IS'])?sanitize_text_field($_POST['TotalSoft_Poll_5_VB_IS']):null; $TotalSoft_Poll_5_RB_Pos =isset($_POST['TotalSoft_Poll_5_RB_Pos'])? sanitize_text_field($_POST['TotalSoft_Poll_5_RB_Pos']):null; $TotalSoft_Poll_5_RB_BW =isset($_POST['TotalSoft_Poll_5_RB_BW'])? sanitize_text_field($_POST['TotalSoft_Poll_5_RB_BW']):null; $TotalSoft_Poll_5_RB_BR = isset($_POST['TotalSoft_Poll_5_RB_BR'])?sanitize_text_field($_POST['TotalSoft_Poll_5_RB_BR']):null; $TotalSoft_Poll_5_RB_FS = isset($_POST['TotalSoft_Poll_5_RB_FS'])?sanitize_text_field($_POST['TotalSoft_Poll_5_RB_FS']):null; $TotalSoft_Poll_5_RB_FF =isset($_POST['TotalSoft_Poll_5_RB_FF'])? sanitize_text_field($_POST['TotalSoft_Poll_5_RB_FF']):null; $TotalSoft_Poll_5_RB_IA = isset($_POST['TotalSoft_Poll_5_RB_IA'])?sanitize_text_field($_POST['TotalSoft_Poll_5_RB_IA']):null; $TotalSoft_Poll_5_RB_IS =isset($_POST['TotalSoft_Poll_5_RB_IS'])? sanitize_text_field($_POST['TotalSoft_Poll_5_RB_IS']):null; $TotalSoft_Poll_5_BB_Pos =isset($_POST['TotalSoft_Poll_5_BB_Pos'])? sanitize_text_field($_POST['TotalSoft_Poll_5_BB_Pos']):null; $TotalSoft_Poll_5_BB_IA = isset($_POST['TotalSoft_Poll_5_BB_IA'])?sanitize_text_field($_POST['TotalSoft_Poll_5_BB_IA']):null; $TotalSoft_Poll_5_TV_Text =isset($_POST['TotalSoft_Poll_5_TV_Text'])? str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_5_TV_Text']))):null; $TotalSoft_Poll_5_BB_Text = isset($_POST['TotalSoft_Poll_5_BB_Text'])? str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_5_BB_Text']))):null; $TotalSoft_Poll_5_RB_Text =isset($_POST['TotalSoft_Poll_5_RB_Text'])? str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_5_RB_Text']))):null; $TotalSoft_Poll_5_VB_Text = isset($_POST['TotalSoft_Poll_5_VB_Text'])?str_replace("\&","&", sanitize_text_field(sanitize_text_field($_POST['TotalSoft_Poll_5_VB_Text']))):null;

			if(isset($_POST['Total_Soft_Poll_TUpdate']))
			{
				$Total_SoftPoll_TUpdateID = sanitize_text_field($_POST['Total_SoftPoll_TUpdateID']);

				$wpdb->query($wpdb->prepare("UPDATE $table_name4 set TotalSoft_Poll_TTitle = %s, TotalSoft_Poll_TType = %s WHERE id = %d", $TotalSoft_Poll_TTitle, $TotalSoft_Poll_TType, $Total_SoftPoll_TUpdateID));

				if($TotalSoft_Poll_TType == 'Standart Poll' || $TotalSoft_Poll_TType == 'Standard Poll')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name5 set TotalSoft_Poll_TTitle = %s, TotalSoft_Poll_TType = %s, TotalSoft_Poll_1_MW = %s, TotalSoft_Poll_1_Pos = %s, TotalSoft_Poll_1_BW = %s, TotalSoft_Poll_1_BR = %s, TotalSoft_Poll_1_BC = %s, TotalSoft_Poll_1_BoxSh_Type = %s, TotalSoft_Poll_1_BoxShC = %s, TotalSoft_Poll_1_Q_FS = %s, TotalSoft_Poll_1_Q_C = %s, TotalSoft_Poll_1_Q_BgC = %s, TotalSoft_Poll_1_LAQ_C = %s, TotalSoft_Poll_1_Q_FF = %s, TotalSoft_Poll_1_Q_TA = %s, TotalSoft_Poll_1_LAQ_W = %s, TotalSoft_Poll_1_LAQ_H = %s, TotalSoft_Poll_1_LAQ_S = %s, TotalSoft_Poll_1_A_CTF = %s, TotalSoft_Poll_1_A_FS = %s, TotalSoft_Poll_1_A_BgC = %s, TotalSoft_Poll_1_A_C = %s, TotalSoft_Poll_1_BoxSh = %s, TotalSoft_Poll_1_LAA_W = %s, TotalSoft_Poll_1_LAA_H = %s, TotalSoft_Poll_1_LAA_C = %s, TotalSoft_Poll_1_LAA_S = %s, TotalSoft_Poll_1_CH_CM = %s, TotalSoft_Poll_1_CH_S = %s, TotalSoft_Poll_1_CH_TBC = %s, TotalSoft_Poll_1_CH_CBC = %s, TotalSoft_Poll_1_CH_TAC = %s, TotalSoft_Poll_1_CH_CAC = %s, TotalSoft_Poll_1_A_HBgC = %s, TotalSoft_Poll_1_A_HC = %s WHERE TotalSoft_Poll_TID = %s", $TotalSoft_Poll_TTitle, $TotalSoft_Poll_TType, $TotalSoft_Poll_1_MW, $TotalSoft_Poll_1_Pos, $TotalSoft_Poll_1_BW, $TotalSoft_Poll_1_BR, $TotalSoft_Poll_1_BC, $TotalSoft_Poll_1_BoxSh_Type, $TotalSoft_Poll_1_BoxShC, $TotalSoft_Poll_1_Q_FS, $TotalSoft_Poll_1_Q_C, $TotalSoft_Poll_1_Q_BgC, $TotalSoft_Poll_1_LAQ_C, $TotalSoft_Poll_1_Q_FF, $TotalSoft_Poll_1_Q_TA, $TotalSoft_Poll_1_LAQ_W, $TotalSoft_Poll_1_LAQ_H, $TotalSoft_Poll_1_LAQ_S, $TotalSoft_Poll_1_A_CTF, $TotalSoft_Poll_1_A_FS, $TotalSoft_Poll_1_A_BgC, $TotalSoft_Poll_1_A_C, $TotalSoft_Poll_1_BoxSh, $TotalSoft_Poll_1_LAA_W, $TotalSoft_Poll_1_LAA_H, $TotalSoft_Poll_1_LAA_C, $TotalSoft_Poll_1_LAA_S, $TotalSoft_Poll_1_CH_CM, $TotalSoft_Poll_1_CH_S, $TotalSoft_Poll_1_CH_TBC, $TotalSoft_Poll_1_CH_CBC, $TotalSoft_Poll_1_CH_TAC, $TotalSoft_Poll_1_CH_CAC, $TotalSoft_Poll_1_A_HBgC, $TotalSoft_Poll_1_A_HC, $Total_SoftPoll_TUpdateID));


					$wpdb->query($wpdb->prepare("UPDATE $table_name8 set TotalSoft_Poll_TTitle = %s, TotalSoft_Poll_TType = %s, TotalSoft_Poll_1_RB_IS = %s, TotalSoft_Poll_1_A_MBgC = %s WHERE TotalSoft_Poll_TID = %s", $TotalSoft_Poll_TTitle, $TotalSoft_Poll_TType, $TotalSoft_Poll_1_RB_IS, $TotalSoft_Poll_1_A_MBgC, $Total_SoftPoll_TUpdateID));
				}
					
				else if($TotalSoft_Poll_TType == 'Image Poll' || $TotalSoft_Poll_TType == 'Video Poll')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name9 set TotalSoft_Poll_TTitle = %s, TotalSoft_Poll_TType = %s, TotalSoft_Poll_2_MW = %s, TotalSoft_Poll_2_Pos = %s, TotalSoft_Poll_2_BW = %s, TotalSoft_Poll_2_BR = %s, TotalSoft_Poll_2_BC = %s, TotalSoft_Poll_2_BoxSh_Type = %s, TotalSoft_Poll_2_BoxShC = %s, TotalSoft_Poll_2_Q_BgC = %s, TotalSoft_Poll_2_Q_C = %s, TotalSoft_Poll_2_LAQ_C = %s, TotalSoft_Poll_2_Q_FS = %s, TotalSoft_Poll_2_Q_FF = %s, TotalSoft_Poll_2_Q_TA = %s, TotalSoft_Poll_2_LAQ_W = %s, TotalSoft_Poll_2_LAQ_H = %s, TotalSoft_Poll_2_LAQ_S = %s, TotalSoft_Poll_2_Play_IT = %s, TotalSoft_Poll_2_Play_IOvC = %s, TotalSoft_Poll_2_Play_IS = %s, TotalSoft_Poll_2_Play_IC = %s, TotalSoft_Poll_2_A_HShC = %s, TotalSoft_Poll_2_A_HSh_Show = %s, TotalSoft_Poll_2_A_HC = %s, TotalSoft_Poll_2_A_HBgC = %s, TotalSoft_Poll_2_CH_CAC = %s, TotalSoft_Poll_2_CH_TAC = %s, TotalSoft_Poll_2_CH_CBC = %s, TotalSoft_Poll_2_CH_TBC = %s, TotalSoft_Poll_2_CH_S = %s, TotalSoft_Poll_2_CH_CM = %s, TotalSoft_Poll_2_LAA_S = %s, TotalSoft_Poll_2_LAA_C = %s, TotalSoft_Poll_2_LAA_H = %s, TotalSoft_Poll_2_LAA_W = %s, TotalSoft_Poll_2_BoxSh = %s, TotalSoft_Poll_2_A_Pos = %s, TotalSoft_Poll_2_A_C = %s, TotalSoft_Poll_2_A_BgC = %s, TotalSoft_Poll_2_A_MBgC = %s, TotalSoft_Poll_2_A_FS = %s, TotalSoft_Poll_2_A_CA = %s, TotalSoft_Poll_2_A_IH = %s, TotalSoft_Poll_2_A_CC = %s WHERE TotalSoft_Poll_TID = %s", $TotalSoft_Poll_TTitle, $TotalSoft_Poll_TType, $TotalSoft_Poll_2_MW, $TotalSoft_Poll_2_Pos, $TotalSoft_Poll_2_BW, $TotalSoft_Poll_2_BR, $TotalSoft_Poll_2_BC, $TotalSoft_Poll_2_BoxSh_Type, $TotalSoft_Poll_2_BoxShC, $TotalSoft_Poll_2_Q_BgC, $TotalSoft_Poll_2_Q_C, $TotalSoft_Poll_2_LAQ_C, $TotalSoft_Poll_2_Q_FS, $TotalSoft_Poll_2_Q_FF, $TotalSoft_Poll_2_Q_TA, $TotalSoft_Poll_2_LAQ_W, $TotalSoft_Poll_2_LAQ_H, $TotalSoft_Poll_2_LAQ_S, $TotalSoft_Poll_2_Play_IT, $TotalSoft_Poll_2_Play_IOvC, $TotalSoft_Poll_2_Play_IS, $TotalSoft_Poll_2_Play_IC, $TotalSoft_Poll_2_A_HShC, $TotalSoft_Poll_2_A_HSh_Show, $TotalSoft_Poll_2_A_HC, $TotalSoft_Poll_2_A_HBgC, $TotalSoft_Poll_2_CH_CAC, $TotalSoft_Poll_2_CH_TAC, $TotalSoft_Poll_2_CH_CBC, $TotalSoft_Poll_2_CH_TBC, $TotalSoft_Poll_2_CH_S, $TotalSoft_Poll_2_CH_CM, $TotalSoft_Poll_2_LAA_S, $TotalSoft_Poll_2_LAA_C, $TotalSoft_Poll_2_LAA_H, $TotalSoft_Poll_2_LAA_W, $TotalSoft_Poll_2_BoxSh, $TotalSoft_Poll_2_A_Pos, $TotalSoft_Poll_2_A_C, $TotalSoft_Poll_2_A_BgC, $TotalSoft_Poll_2_A_MBgC, $TotalSoft_Poll_2_A_FS, $TotalSoft_Poll_2_A_CA, $TotalSoft_Poll_2_A_IH, $TotalSoft_Poll_2_A_CC, $Total_SoftPoll_TUpdateID));
				
				}
					
				else if($TotalSoft_Poll_TType == 'Standart Without Button' || $TotalSoft_Poll_TType == 'Standard Without Button')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name11 set TotalSoft_Poll_TTitle = %s, TotalSoft_Poll_TType = %s, TotalSoft_Poll_3_MW = %s, TotalSoft_Poll_3_Pos = %s, TotalSoft_Poll_3_BW = %s, TotalSoft_Poll_3_BC = %s, TotalSoft_Poll_3_BR = %s, TotalSoft_Poll_3_BoxSh_Type = %s, TotalSoft_Poll_3_BoxSh = %s, TotalSoft_Poll_3_BoxShC = %s, TotalSoft_Poll_3_Q_BgC = %s, TotalSoft_Poll_3_Q_C = %s, TotalSoft_Poll_3_Q_FS = %s, TotalSoft_Poll_3_Q_FF = %s, TotalSoft_Poll_3_Q_TA = %s, TotalSoft_Poll_3_LAQ_W = %s, TotalSoft_Poll_3_LAQ_H = %s, TotalSoft_Poll_3_LAQ_C = %s, TotalSoft_Poll_3_LAQ_S = %s, TotalSoft_Poll_3_A_CA = %s, TotalSoft_Poll_3_A_FS = %s, TotalSoft_Poll_3_A_MBgC = %s, TotalSoft_Poll_3_A_BgC = %s, TotalSoft_Poll_3_A_C = %s, TotalSoft_Poll_3_A_BW = %s, TotalSoft_Poll_3_A_BC = %s, TotalSoft_Poll_3_A_BR = %s, TotalSoft_Poll_3_CH_Sh = %s, TotalSoft_Poll_3_CH_S = %s, TotalSoft_Poll_3_CH_TBC = %s, TotalSoft_Poll_3_CH_CBC = %s, TotalSoft_Poll_3_CH_TAC = %s, TotalSoft_Poll_3_CH_CAC = %s, TotalSoft_Poll_3_A_HBgC = %s, TotalSoft_Poll_3_A_HC = %s, TotalSoft_Poll_3_LAA_W = %s, TotalSoft_Poll_3_LAA_H = %s, TotalSoft_Poll_3_LAA_C = %s, TotalSoft_Poll_3_LAA_S = %s WHERE TotalSoft_Poll_TID = %s", $TotalSoft_Poll_TTitle, $TotalSoft_Poll_TType, $TotalSoft_Poll_3_MW, $TotalSoft_Poll_3_Pos, $TotalSoft_Poll_3_BW, $TotalSoft_Poll_3_BC, $TotalSoft_Poll_3_BR, $TotalSoft_Poll_3_BoxSh_Type, $TotalSoft_Poll_3_BoxSh, $TotalSoft_Poll_3_BoxShC, $TotalSoft_Poll_3_Q_BgC, $TotalSoft_Poll_3_Q_C, $TotalSoft_Poll_3_Q_FS, $TotalSoft_Poll_3_Q_FF, $TotalSoft_Poll_3_Q_TA, $TotalSoft_Poll_3_LAQ_W, $TotalSoft_Poll_3_LAQ_H, $TotalSoft_Poll_3_LAQ_C, $TotalSoft_Poll_3_LAQ_S, $TotalSoft_Poll_3_A_CA, $TotalSoft_Poll_3_A_FS, $TotalSoft_Poll_3_A_MBgC, $TotalSoft_Poll_3_A_BgC, $TotalSoft_Poll_3_A_C, $TotalSoft_Poll_3_A_BW, $TotalSoft_Poll_3_A_BC, $TotalSoft_Poll_3_A_BR, $TotalSoft_Poll_3_CH_Sh, $TotalSoft_Poll_3_CH_S, $TotalSoft_Poll_3_CH_TBC, $TotalSoft_Poll_3_CH_CBC, $TotalSoft_Poll_3_CH_TAC, $TotalSoft_Poll_3_CH_CAC, $TotalSoft_Poll_3_A_HBgC, $TotalSoft_Poll_3_A_HC, $TotalSoft_Poll_3_LAA_W, $TotalSoft_Poll_3_LAA_H, $TotalSoft_Poll_3_LAA_C, $TotalSoft_Poll_3_LAA_S, $Total_SoftPoll_TUpdateID));
					
				}
				else if($TotalSoft_Poll_TType == 'Image Without Button' || $TotalSoft_Poll_TType == 'Video Without Button')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name13 set TotalSoft_Poll_TTitle = %s, TotalSoft_Poll_TType = %s, TotalSoft_Poll_4_MW = %s, TotalSoft_Poll_4_Pos = %s, TotalSoft_Poll_4_BW = %s, TotalSoft_Poll_4_BR = %s, TotalSoft_Poll_4_BC = %s, TotalSoft_Poll_4_BoxSh_Type = %s, TotalSoft_Poll_4_BoxShC = %s, TotalSoft_Poll_4_Q_BgC = %s, TotalSoft_Poll_4_Q_C = %s, TotalSoft_Poll_4_LAQ_C = %s, TotalSoft_Poll_4_Q_FS = %s, TotalSoft_Poll_4_Q_FF = %s, TotalSoft_Poll_4_Q_TA = %s, TotalSoft_Poll_4_LAQ_W = %s, TotalSoft_Poll_4_LAQ_H = %s, TotalSoft_Poll_4_LAQ_S = %s, TotalSoft_Poll_4_LAA_S = %s, TotalSoft_Poll_4_LAA_C = %s, TotalSoft_Poll_4_LAA_H = %s, TotalSoft_Poll_4_LAA_W = %s, TotalSoft_Poll_4_A_HC = %s, TotalSoft_Poll_4_A_HBgC = %s, TotalSoft_Poll_4_A_FF = %s, TotalSoft_Poll_4_A_BR = %s, TotalSoft_Poll_4_A_BC = %s, TotalSoft_Poll_4_A_BW = %s, TotalSoft_Poll_4_A_C = %s, TotalSoft_Poll_4_A_BgC = %s, TotalSoft_Poll_4_A_MBgC = %s, TotalSoft_Poll_4_A_FS = %s, TotalSoft_Poll_4_A_CA = %s WHERE TotalSoft_Poll_TID = %s", $TotalSoft_Poll_TTitle, $TotalSoft_Poll_TType, $TotalSoft_Poll_4_MW, $TotalSoft_Poll_4_Pos, $TotalSoft_Poll_4_BW, $TotalSoft_Poll_4_BR, $TotalSoft_Poll_4_BC, $TotalSoft_Poll_4_BoxSh_Type, $TotalSoft_Poll_4_BoxShC, $TotalSoft_Poll_4_Q_BgC, $TotalSoft_Poll_4_Q_C, $TotalSoft_Poll_4_LAQ_C, $TotalSoft_Poll_4_Q_FS, $TotalSoft_Poll_4_Q_FF, $TotalSoft_Poll_4_Q_TA, $TotalSoft_Poll_4_LAQ_W, $TotalSoft_Poll_4_LAQ_H, $TotalSoft_Poll_4_LAQ_S, $TotalSoft_Poll_4_LAA_S, $TotalSoft_Poll_4_LAA_C, $TotalSoft_Poll_4_LAA_H, $TotalSoft_Poll_4_LAA_W, $TotalSoft_Poll_4_A_HC, $TotalSoft_Poll_4_A_HBgC, $TotalSoft_Poll_4_A_FF, $TotalSoft_Poll_4_A_BR, $TotalSoft_Poll_4_A_BC, $TotalSoft_Poll_4_A_BW, $TotalSoft_Poll_4_A_C, $TotalSoft_Poll_4_A_BgC, $TotalSoft_Poll_4_A_MBgC, $TotalSoft_Poll_4_A_FS, $TotalSoft_Poll_4_A_CA, $Total_SoftPoll_TUpdateID));
					
				}
				else if($TotalSoft_Poll_TType == 'Image in Question' || $TotalSoft_Poll_TType == 'Video in Question')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name16 set TotalSoft_Poll_TTitle = %s, TotalSoft_Poll_TType = %s, TotalSoft_Poll_5_MW = %s, TotalSoft_Poll_5_Pos = %s, TotalSoft_Poll_5_BW = %s, TotalSoft_Poll_5_BR = %s, TotalSoft_Poll_5_BC = %s, TotalSoft_Poll_5_BoxSh_Type = %s, TotalSoft_Poll_5_BoxShC = %s, TotalSoft_Poll_5_Q_BgC = %s, TotalSoft_Poll_5_Q_C = %s, TotalSoft_Poll_5_LAQ_C = %s, TotalSoft_Poll_5_Q_FS = %s, TotalSoft_Poll_5_Q_FF = %s, TotalSoft_Poll_5_Q_TA = %s, TotalSoft_Poll_5_I_H = %s, TotalSoft_Poll_5_I_Ra = %s, TotalSoft_Poll_5_LAQ_W = %s, TotalSoft_Poll_5_LAQ_H = %s, TotalSoft_Poll_5_LAQ_S = %s, TotalSoft_Poll_5_A_CA = %s, TotalSoft_Poll_5_A_FS = %s, TotalSoft_Poll_5_A_MBgC = %s, TotalSoft_Poll_5_A_BgC = %s, TotalSoft_Poll_5_A_C = %s, TotalSoft_Poll_5_A_BW = %s, TotalSoft_Poll_5_A_BC = %s, TotalSoft_Poll_5_A_BR = %s, TotalSoft_Poll_5_BoxSh = %s, TotalSoft_Poll_5_A_HBgC = %s, TotalSoft_Poll_5_A_HC = %s, TotalSoft_Poll_5_CH_S = %s, TotalSoft_Poll_5_CH_TBC = %s, TotalSoft_Poll_5_CH_CBC = %s, TotalSoft_Poll_5_CH_TAC = %s, TotalSoft_Poll_5_CH_CAC = %s, TotalSoft_Poll_5_LAA_W = %s, TotalSoft_Poll_5_LAA_H = %s, TotalSoft_Poll_5_LAA_C = %s, TotalSoft_Poll_5_LAA_S = %s WHERE TotalSoft_Poll_TID = %s", $TotalSoft_Poll_TTitle, $TotalSoft_Poll_TType, $TotalSoft_Poll_5_MW, $TotalSoft_Poll_5_Pos, $TotalSoft_Poll_5_BW, $TotalSoft_Poll_5_BR, $TotalSoft_Poll_5_BC, $TotalSoft_Poll_5_BoxSh_Type, $TotalSoft_Poll_5_BoxShC, $TotalSoft_Poll_5_Q_BgC, $TotalSoft_Poll_5_Q_C, $TotalSoft_Poll_5_LAQ_C, $TotalSoft_Poll_5_Q_FS, $TotalSoft_Poll_5_Q_FF, $TotalSoft_Poll_5_Q_TA, $TotalSoft_Poll_5_I_H, $TotalSoft_Poll_5_I_Ra, $TotalSoft_Poll_5_LAQ_W, $TotalSoft_Poll_5_LAQ_H, $TotalSoft_Poll_5_LAQ_S, $TotalSoft_Poll_5_A_CA, $TotalSoft_Poll_5_A_FS, $TotalSoft_Poll_5_A_MBgC, $TotalSoft_Poll_5_A_BgC, $TotalSoft_Poll_5_A_C, $TotalSoft_Poll_5_A_BW, $TotalSoft_Poll_5_A_BC, $TotalSoft_Poll_5_A_BR, $TotalSoft_Poll_5_BoxSh, $TotalSoft_Poll_5_A_HBgC, $TotalSoft_Poll_5_A_HC, $TotalSoft_Poll_5_CH_S, $TotalSoft_Poll_5_CH_TBC, $TotalSoft_Poll_5_CH_CBC, $TotalSoft_Poll_5_CH_TAC, $TotalSoft_Poll_5_CH_CAC, $TotalSoft_Poll_5_LAA_W, $TotalSoft_Poll_5_LAA_H, $TotalSoft_Poll_5_LAA_C, $TotalSoft_Poll_5_LAA_S, $Total_SoftPoll_TUpdateID));
					
				}
			}
		}
		else
		{
			wp_die('Security check fail'); 
		}
	}

	$TotalSoftPollThemes = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id>%d order by id", 0));

	$TotalSoftFontCount = array("Abadi MT Condensed Light", "Aharoni", "Aldhabi", "Amaranth", "Andalus", "Angsana New", "AngsanaUPC", "Anton", "Aparajita", "Arabic Typesetting", "Arial", "Arial Black", "Batang", "BatangChe", "Browallia New", "BrowalliaUPC", "Calibri", "Calibri Light", "Calisto MT", "Cambria", "Candara", "Century Gothic", "Comic Sans MS", "Consolas", "Constantia", "Copperplate Gothic", "Copperplate Gothic Light", "Battambang", "Baumans", "Bungee Shade", "Butcherman","Cabin", "Cabin Sketch", "Cairo", "Damion", "DilleniaUPC", "DaunPenh", "Eagle Lake", "East Sea Dokdo", "Fira Sans Condensed", "Fira Sans Extra Condensed", "FreesiaUPC", "Gafata", "Gabriola", "Jacques Francois", "Headland One", "Katibeh", "KaiTi", "Microsoft Yi Baiti", "Monsieur La Doulaise", "Mr De Haviland", "Nova Script", "Nova Square", "Nyala", "Odor Mean Chey", "Offside", "Old Standard TT", "Oldenburg", "Oxygen", "Oxygen Mono", "Princess Sofia", "Prociono", "Prompt", "Prosto One", "Proza Libre",  "Quicksand", "Quintessential", "Qwigley",  "Raavi", "Racing Sans One", "Radley", "Rajdhani", "Rakkas", "Raleway", "Raleway Dots", "Ramabhadra", "Ramaraja", "Rosarivo", "Revalia", "Shruti", "Siemreap", "Sigmar One", "Signika", "Signika Negative", "SimHei", "SimKai",  "Simonetta", "Tahoma", "Tajawal", "Tangerine", "Taprom", "Tauri", "Taviraj", "Teko", "Telex", "Tenali Ramakrishna", "Tenor Sans", "Text Me One", "The Girl Next Door", "Tienne", "Tillana", "Times New Roman", "Timmana", "Tinos", "Titan One", "Vijaya");
	$TotalSoftFontGCount = array("Abadi MT Condensed Light", "Aharoni", "Aldhabi", "Amaranth", "Andalus", "Angsana New", "AngsanaUPC", "Anton", "Aparajita", "Arabic Typesetting", "Arial", "Arial Black", "Batang", "BatangChe", "Browallia New", "BrowalliaUPC", "Calibri", "Calibri Light", "Calisto MT", "Cambria", "Candara", "Century Gothic", "Comic Sans MS", "Consolas", "Constantia", "Copperplate Gothic", "Copperplate Gothic Light", "Battambang", "Baumans", "Bungee Shade", "Butcherman","Cabin", "Cabin Sketch", "Cairo", "Damion", "DilleniaUPC", "DaunPenh", "Eagle Lake", "East Sea Dokdo", "Fira Sans Condensed", "Fira Sans Extra Condensed", "FreesiaUPC", "Gafata", "Gabriola", "Jacques Francois", "Headland One", "Katibeh", "KaiTi", "Microsoft Yi Baiti", "Monsieur La Doulaise", "Mr De Haviland", "Nova Script", "Nova Square", "Nyala", "Odor Mean Chey", "Offside", "Old Standard TT", "Oldenburg", "Oxygen", "Oxygen Mono", "Princess Sofia", "Prociono", "Prompt", "Prosto One", "Proza Libre",  "Quicksand", "Quintessential", "Qwigley",  "Raavi", "Racing Sans One", "Radley", "Rajdhani", "Rakkas", "Raleway", "Raleway Dots", "Ramabhadra", "Ramaraja", "Rosarivo", "Revalia", "Shruti", "Siemreap", "Sigmar One", "Signika", "Signika Negative", "SimHei", "SimKai",  "Simonetta", "Tahoma", "Tajawal", "Tangerine", "Taprom", "Tauri", "Taviraj", "Teko", "Telex", "Tenali Ramakrishna", "Tenor Sans", "Text Me One", "The Girl Next Door", "Tienne", "Tillana", "Times New Roman", "Timmana", "Tinos", "Titan One", "Vijaya");

        wp_enqueue_style('totalsoft', plugins_url('../CSS/totalsoft.css', __FILE__));
        wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=ABeeZee|Abel|Abhaya+Libre|Abril+Fatface|Aclonica|Acme|Actor|Adamina|Advent+Pro|Aguafina+Script|Akronim|Aladin|Aldrich|Alef|Alegreya|Alegreya+SC|Alegreya+Sans|Alegreya+Sans+SC|Alex+Brush|Alfa+Slab+One|Alice|Alike|Alike+Angular|Allan|Allerta|Allerta+Stencil|Allura|Almendra|Almendra+Display|Almendra+SC|Amarante|Amaranth|Amatic+SC|Amethysta|Amiko|Amiri|Amita|Anaheim|Andada|Andika|Angkor|Annie+Use+Your+Telescope|Anonymous+Pro|Antic|Antic+Didone|Antic+Slab|Anton|Arapey|Arbutus|Arbutus+Slab|Architects+Daughter|Archivo|Archivo+Black|Archivo+Narrow|Aref+Ruqaa|Arima+Madurai|Arimo|Arizonia|Armata|Arsenal|Artifika|Arvo|Arya|Asap|Asap+Condensed|Asar|Asset|Assistant|Astloch|Asul|Athiti|Atma|Atomic+Age|Aubrey|Audiowide|Autour+One|Average|Average+Sans|Averia+Gruesa+Libre|Averia+Libre|Averia+Sans+Libre|Averia+Serif+Libre|Bad+Script|Bahiana|Baloo|Baloo+Bhai|Baloo+Bhaijaan|Baloo+Bhaina|Baloo+Chettan|Baloo+Da|Baloo+Paaji|Baloo+Tamma|Baloo+Tammudu|Baloo+Thambi|Balthazar|Bangers|Barlow|Barlow+Condensed|Barlow+Semi+Condensed|Barrio|Basic|Battambang|Baumans|Bayon|Belgrano|Bellefair|Belleza|BenchNine|Bentham|Berkshire+Swash|Bevan|Bigelow+Rules|Bigshot+One|Bilbo|Bilbo+Swash+Caps|BioRhyme|BioRhyme+Expanded|Biryani|Bitter|Black+And+White+Picture|Black+Han+Sans|Black+Ops+One|Bokor|Bonbon|Boogaloo|Bowlby+One|Bowlby+One+SC|Brawler|Bree+Serif|Bubblegum+Sans|Bubbler+One|Buda:300|Buenard|Bungee|Bungee+Hairline|Bungee+Inline|Bungee+Outline|Bungee+Shade|Butcherman|Butterfly+Kids|Cabin|Cabin+Condensed|Cabin+Sketch|Caesar+Dressing|Cagliostro|Cairo|Calligraffitti|Cambay|Cambo|Candal|Cantarell|Cantata+One|Cantora+One|Capriola|Cardo|Carme|Carrois+Gothic|Carrois+Gothic+SC|Carter+One|Catamaran|Caudex|Caveat|Caveat+Brush|Cedarville+Cursive|Ceviche+One|Changa|Changa+One|Chango|Chathura|Chau+Philomene+One|Chela+One|Chelsea+Market|Chenla|Cherry+Cream+Soda|Cherry+Swash|Chewy|Chicle|Chivo|Chonburi|Cinzel|Cinzel+Decorative|Clicker+Script|Coda|Coda+Caption:800|Codystar|Coiny|Combo|Comfortaa|Coming+Soon|Concert+One|Condiment|Content|Contrail+One|Convergence|Cookie|Copse|Corben|Cormorant|Cormorant+Garamond|Cormorant+Infant|Cormorant+SC|Cormorant+Unicase|Cormorant+Upright|Courgette|Cousine|Coustard|Covered+By+Your+Grace|Crafty+Girls|Creepster|Crete+Round|Crimson+Text|Croissant+One|Crushed|Cuprum|Cute+Font|Cutive|Cutive+Mono|Damion|Dancing+Script|Dangrek|David+Libre|Dawning+of+a+New+Day|Days+One|Dekko|Delius|Delius+Swash+Caps|Delius+Unicase|Della+Respira|Denk+One|Devonshire|Dhurjati|Didact+Gothic|Diplomata|Diplomata+SC|Do+Hyeon|Dokdo|Domine|Donegal+One|Doppio+One|Dorsa|Dosis|Dr+Sugiyama|Duru+Sans|Dynalight|EB+Garamond|Eagle+Lake|East+Sea+Dokdo|Eater|Economica|Eczar|El+Messiri|Electrolize|Elsie|Elsie+Swash+Caps|Emblema+One|Emilys+Candy|Encode+Sans|Encode+Sans+Condensed|Encode+Sans+Expanded|Encode+Sans+Semi+Condensed|Encode+Sans+Semi+Expanded|Engagement|Englebert|Enriqueta|Erica+One|Esteban|Euphoria+Script|Ewert|Exo|Exo+2|Expletus+Sans|Fanwood+Text|Farsan|Fascinate|Fascinate+Inline|Faster+One|Fasthand|Fauna+One|Faustina|Federant|Federo|Felipa|Fenix|Finger+Paint|Fira+Mono|Fira+Sans|Fira+Sans+Condensed|Fira+Sans+Extra+Condensed|Fjalla+One|Fjord+One|Flamenco|Flavors|Fondamento|Fontdiner+Swanky|Forum|Francois+One|Frank+Ruhl+Libre|Freckle+Face|Fredericka+the+Great|Fredoka+One|Freehand|Fresca|Frijole|Fruktur|Fugaz+One|GFS+Didot|GFS+Neohellenic|Gabriela|Gaegu|Gafata|Galada|Galdeano|Galindo|Gamja+Flower|Gentium+Basic|Gentium+Book+Basic|Geo|Geostar|Geostar+Fill|Germania+One|Gidugu|Gilda+Display|Give+You+Glory|Glass+Antiqua|Glegoo|Gloria+Hallelujah|Goblin+One|Gochi+Hand|Gorditas|Gothic+A1|Goudy+Bookletter+1911|Graduate|Grand+Hotel|Gravitas+One|Great+Vibes|Griffy|Gruppo|Gudea|Gugi|Gurajada|Habibi|Halant|Hammersmith+One|Hanalei|Hanalei+Fill|Handlee|Hanuman|Happy+Monkey|Harmattan|Headland+One|Heebo|Henny+Penny|Herr+Von+Muellerhoff|Hi+Melody|Hind|Hind+Guntur|Hind+Madurai|Hind+Siliguri|Hind+Vadodara|Holtwood+One+SC|Homemade+Apple|Homenaje|IBM+Plex+Mono|IBM+Plex+Sans|IBM+Plex+Sans+Condensed|IBM+Plex+Serif|IM+Fell+DW+Pica|IM+Fell+DW+Pica+SC|IM+Fell+Double+Pica|IM+Fell+Double+Pica+SC|IM+Fell+English|IM+Fell+English+SC|IM+Fell+French+Canon|IM+Fell+French+Canon+SC|IM+Fell+Great+Primer|IM+Fell+Great+Primer+SC|Iceberg|Iceland|Imprima|Inconsolata|Inder|Indie+Flower|Inika|Inknut+Antiqua|Irish+Grover|Istok+Web|Italiana|Italianno|Itim|Jacques+Francois|Jacques+Francois+Shadow|Jaldi|Jim+Nightshade|Jockey+One|Jolly+Lodger|Jomhuria|Josefin+Sans|Josefin+Slab|Joti+One|Jua|Judson|Julee|Julius+Sans+One|Junge|Jura|Just+Another+Hand|Just+Me+Again+Down+Here|Kadwa|Kalam|Kameron|Kanit|Kantumruy|Karla|Karma|Katibeh|Kaushan+Script|Kavivanar|Kavoon|Kdam+Thmor|Keania+One|Kelly+Slab|Kenia|Khand|Khmer|Khula|Kirang+Haerang|Kite+One|Knewave|Kotta+One|Koulen|Kranky|Kreon|Kristi|Krona+One|Kurale|La+Belle+Aurore|Laila|Lakki+Reddy|Lalezar|Lancelot|Lateef|Lato|League+Script|Leckerli+One|Ledger|Lekton|Lemon|Lemonada|Libre+Barcode+128|Libre+Barcode+128+Text|Libre+Barcode+39|Libre+Barcode+39+Extended|Libre+Barcode+39+Extended+Text|Libre+Barcode+39+Text|Libre+Baskerville|Libre+Franklin|Life+Savers|Lilita+One|Lily+Script+One|Limelight|Linden+Hill|Lobster|Lobster+Two|Londrina+Outline|Londrina+Shadow|Londrina+Sketch|Londrina+Solid|Lora|Love+Ya+Like+A+Sister|Loved+by+the+King|Lovers+Quarrel|Luckiest+Guy|Lusitana|Lustria|Macondo|Macondo+Swash+Caps|Mada|Magra|Maiden+Orange|Maitree|Mako|Mallanna|Mandali|Manuale|Marcellus|Marcellus+SC|Marck+Script|Margarine|Marko+One|Marmelad|Martel|Martel+Sans|Marvel|Mate|Mate+SC|Maven+Pro|McLaren|Meddon|MedievalSharp|Medula+One|Meera+Inimai|Megrim|Meie+Script|Merienda|Merienda+One|Merriweather|Merriweather+Sans|Metal|Metal+Mania|Metamorphous|Metrophobic|Michroma|Milonga|Miltonian|Miltonian+Tattoo|Mina|Miniver|Miriam+Libre|Mirza|Miss+Fajardose|Mitr|Modak|Modern+Antiqua|Mogra|Molengo|Molle:400i|Monda|Monofett|Monoton|Monsieur+La+Doulaise|Montaga|Montez|Montserrat|Montserrat+Alternates|Montserrat+Subrayada|Moul|Moulpali|Mountains+of+Christmas|Mouse+Memoirs|Mr+Bedfort|Mr+Dafoe|Mr+De+Haviland|Mrs+Saint+Delafield|Mrs+Sheppards|Mukta|Mukta+Mahee|Mukta+Malar|Mukta+Vaani|Muli|Mystery+Quest|NTR|Nanum+Brush+Script|Nanum+Gothic|Nanum+Gothic+Coding|Nanum+Myeongjo|Nanum+Pen+Script|Neucha|Neuton|New+Rocker|News+Cycle|Niconne|Nixie+One|Nobile|Nokora|Norican|Nosifer|Nothing+You+Could+Do|Noticia+Text|Noto+Sans|Noto+Serif|Nova+Cut|Nova+Flat|Nova+Mono|Nova+Oval|Nova+Round|Nova+Script|Nova+Slim|Nova+Square|Numans|Nunito|Nunito+Sans|Odor+Mean+Chey|Offside|Old+Standard+TT|Oldenburg|Oleo+Script|Oleo+Script+Swash+Caps|Open+Sans|Open+Sans+Condensed:300|Oranienbaum|Orbitron|Oregano|Orienta|Original+Surfer|Oswald|Over+the+Rainbow|Overlock|Overlock+SC|Overpass|Overpass+Mono|Ovo|Oxygen|Oxygen+Mono|PT+Mono|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|PT+Serif|PT+Serif+Caption|Pacifico|Padauk|Palanquin|Palanquin+Dark|Pangolin|Paprika|Parisienne|Passero+One|Passion+One|Pathway+Gothic+One|Patrick+Hand|Patrick+Hand+SC|Pattaya|Patua+One|Pavanam|Paytone+One|Peddana|Peralta|Permanent+Marker|Petit+Formal+Script|Petrona|Philosopher|Piedra|Pinyon+Script|Pirata+One|Plaster|Play|Playball|Playfair+Display|Playfair+Display+SC|Podkova|Poiret+One|Poller+One|Poly|Pompiere|Pontano+Sans|Poor+Story|Poppins|Port+Lligat+Sans|Port+Lligat+Slab|Pragati+Narrow|Prata|Preahvihear|Press+Start+2P|Pridi|Princess+Sofia|Prociono|Prompt|Prosto+One|Proza+Libre|Puritan|Purple+Purse|Quando|Quantico|Quattrocento|Quattrocento+Sans|Questrial|Quicksand|Quintessential|Qwigley|Racing+Sans+One|Radley|Rajdhani|Rakkas|Raleway|Raleway+Dots|Ramabhadra|Ramaraja|Rambla|Rammetto+One|Ranchers|Rancho|Ranga|Rasa|Rationale|Ravi+Prakash|Redressed|Reem+Kufi|Reenie+Beanie|Revalia|Rhodium+Libre|Ribeye|Ribeye+Marrow|Righteous|Risque|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab|Rochester|Rock+Salt|Rokkitt|Romanesco|Ropa+Sans|Rosario|Rosarivo|Rouge+Script|Rozha+One|Rubik|Rubik+Mono+One|Ruda|Rufina|Ruge+Boogie|Ruluko|Rum+Raisin|Ruslan+Display|Russo+One|Ruthie|Rye|Sacramento|Sahitya|Sail|Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Salsa|Sanchez|Sancreek|Sansita|Sarala|Sarina|Sarpanch|Satisfy|Scada|Scheherazade|Schoolbell|Scope+One|Seaweed+Script|Secular+One|Sedgwick+Ave|Sedgwick+Ave+Display|Sevillana|Seymour+One|Shadows+Into+Light|Shadows+Into+Light+Two|Shanti|Share|Share+Tech|Share+Tech+Mono|Shojumaru|Short+Stack|Shrikhand|Siemreap|Sigmar+One|Signika|Signika+Negative|Simonetta|Sintony|Sirin+Stencil|Six+Caps|Skranji|Slabo+13px|Slabo+27px|Slackey|Smokum|Smythe|Sniglet|Snippet|Snowburst+One|Sofadi+One|Sofia|Song+Myung|Sonsie+One|Sorts+Mill+Goudy|Source+Code+Pro|Source+Sans+Pro|Source+Serif+Pro|Space+Mono|Special+Elite|Spectral|Spectral+SC|Spicy+Rice|Spinnaker|Spirax|Squada+One|Sree+Krushnadevaraya|Sriracha|Stalemate|Stalinist+One|Stardos+Stencil|Stint+Ultra+Condensed|Stint+Ultra+Expanded|Stoke|Strait|Stylish|Sue+Ellen+Francisco|Suez+One|Sumana|Sunflower:300|Sunshiney|Supermercado+One|Sura|Suranna|Suravaram|Suwannaphum|Swanky+and+Moo+Moo|Syncopate|Tajawal|Tangerine|Taprom|Tauri|Taviraj|Teko|Telex|Tenali+Ramakrishna|Tenor+Sans|Text+Me+One|The+Girl+Next+Door|Tienne|Tillana|Timmana|Tinos|Titan+One|Titillium+Web|Trade+Winds|Trirong|Trocchi|Trochut|Trykker|Tulpen+One|Ubuntu|Ubuntu+Condensed|Ubuntu+Mono|Ultra|Uncial+Antiqua|Underdog|Unica+One|UnifrakturCook:700|UnifrakturMaguntia|Unkempt|Unlock|Unna|VT323|Vampiro+One|Varela|Varela+Round|Vast+Shadow|Vesper+Libre|Vibur|Vidaloka|Viga|Voces|Volkhov|Vollkorn|Vollkorn+SC|Voltaire|Waiting+for+the+Sunrise|Wallpoet|Walter+Turncoat|Warnes|Wellfleet|Wendy+One|Wire+One|Work+Sans|Yanone+Kaffeesatz|Yantramanav|Yatra+One|Yellowtail|Yeon+Sung|Yeseva+One|Yesteryear|Yrsa|Zeyada|Zilla+Slab|Zilla+Slab+Highlight" rel="stylesheet');
?>

<form method="POST" oninput="TotalSoft_Poll_Out()">
	<?php wp_nonce_field( 'edit-menu_', 'TS_Poll_Nonce' );?>
	<div class="Total_Soft_Poll_AMD">
		<a href="https://total-soft.com/wp-poll/" target="_blank" title="Click to Buy">
			<div class="Full_Version"><i class="totalsoft totalsoft-cart-arrow-down"></i> Get The Full Version</div>
		</a>
		<div class="Full_Version_Span">
			This is the free version of the plugin.
		</div>
		<div class="Support_Span">
			<a href="https://wordpress.org/support/plugin/poll-wp/" target="_blank" title="Click Here to Ask">
				<i class="totalsoft totalsoft-comments-o"></i><span style="margin-left:5px;">If you have any questions click here to ask it to our support.</span>
			</a>
		</div>
		<div class="Total_Soft_Poll_AMD1"></div>
		<div class="Total_Soft_Poll_AMD2">
			<i class="Total_Soft_Poll_Help totalsoft totalsoft-question-circle-o" title="Click for Creating New Theme."></i>
			<span class="Total_Soft_Poll_AMD2_But" onclick="TotalSoft_Poll_Theme_But1()">
				New Theme (Pro)
			</span>
		</div>
		<div class="Total_Soft_Poll_AMD3">
			<i class="Total_Soft_Poll_Help totalsoft totalsoft-question-circle-o" title="Click for Canceling."></i>
			<span class="Total_Soft_Poll_AMD2_But" onclick="TotalSoftPoll_Reload()">
				Cancel
			</span>
			<i class="Total_Soft_Poll_Update Total_Soft_Poll_Help totalsoft totalsoft-question-circle-o" title="Click to Update Theme Options."></i>
			<button type="submit" class="Total_Soft_Poll_Update Total_Soft_Poll_AMD2_But" name="Total_Soft_Poll_TUpdate">
				Update
			</button>

			<input type="text" style="display:none" name="Total_SoftPoll_TUpdateID" id="Total_SoftPoll_TUpdateID">
			<input type="text" style="display:none" id="Total_Soft_Poll_Theme_Prev" value="<?php echo home_url(); ?>?ts_poll_preview_theme=true">
		</div>
	</div>
	<table class="Total_Soft_Poll_TMMTable">
		<tr class="Total_Soft_Poll_TMMTableFR">
			<td>No</td>
			<td>Title</td>
			<td>Type</td>
			<td>Copy</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
	</table>
	<table class="Total_Soft_Poll_TMOTable">
			<?php for($i=0;$i<count($TotalSoftPollThemes);$i++){ ?>
			<?php
				$TotalSoftPoll = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id>%d", 0));
				$TS_Poll_Types = array();
				if(count($TotalSoftPoll) != 0)
				{
					for($j = 0; $j < count($TotalSoftPoll); $j++)
					{
						$TotalSoftPollOptions1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id = %d", $TotalSoftPoll[$j]->TotalSoftPoll_Theme));
						if(!in_array($TotalSoftPollOptions1[0]->TotalSoft_Poll_TType, $TS_Poll_Types))
						{
							array_push($TS_Poll_Types,$TotalSoftPollOptions1[0]->TotalSoft_Poll_TType);
						}
					}
				}
			?>
			<tr id="Total_Soft_Poll_TMOTable_tr_<?php echo esc_html( $TotalSoftPollThemes[$i]->id);?>">
				<td><?php echo esc_html( $i+1);?></td>
				<td><?php echo esc_html( $TotalSoftPollThemes[$i]->TotalSoft_Poll_TTitle);?></td>
				<td><?php echo esc_html( $TotalSoftPollThemes[$i]->TotalSoft_Poll_TType);?></td>
	      <td><i class="totalsoft totalsoft-file-text" onclick="TotalSoftPoll_Theme_Clone(<?php echo esc_attr($TotalSoftPollThemes[$i]->id);?>)"></i></td>
				<td><i class="totalsoft totalsoft-pencil" onclick="TotalSoftPoll_Theme_Edit(<?php echo esc_attr($TotalSoftPollThemes[$i]->id);?>)"></i></td>
					<td>
					<i class="totalsoft totalsoft-trash" onclick="TotalSoftPoll_Theme_Del(<?php echo esc_attr($TotalSoftPollThemes[$i]->id);?>)"></i>
					<span class="Total_Soft_Poll_Del_Span">
						<i class="Total_Soft_Poll_Del_Span_Yes totalsoft totalsoft-check" onclick="TotalSoft_Poll_Theme_But1()"></i>
						<i class="Total_Soft_Poll_Del_Span_No totalsoft totalsoft-times" onclick="TotalSoftPoll_Theme_Del_No(<?php echo esc_attr($TotalSoftPollThemes[$i]->id);?>)"></i>
					</span>
				</td>
			</tr>
		<?php }?>
	</table>
	<div class="Total_Soft_Poll_Loading">
		<img src="<?php echo plugins_url('../Images/loading.gif',__FILE__);?>">
	</div>
	<div class="TS_Poll_Option_Div_Set TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSet_Table" style="margin-top: 15px;">
		<div class="TS_Poll_Option_Divv1">
			<div class="TS_Poll_Option_Div1">
				<div class="TS_Poll_Option_Name">Theme Title <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="You can give name to poll theme which will be saved with effects created by you."></i></div>
				<div class="TS_Poll_Option_Field">
					<input type="text" class="Total_Soft_Poll_Select" name="TotalSoft_Poll_TTitle" id="TotalSoft_Poll_TTitle" required placeholder=" *  Required">
				</div>
			</div>
		</div>
		<div class="TS_Poll_Option_Divv2">
			<div class="TS_Poll_Option_Div1">
				<div class="TS_Poll_Option_Name">Type <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose that type which you want to see."></i></div>
				<div class="TS_Poll_Option_Field">
					<select class="Total_Soft_Poll_Select" id="TotalSoft_Poll_TType" name="TotalSoft_Poll_TType">
						<option value="Standard Poll">           Standard Poll           </option>
						<option value="Standart Poll" style="display: none;">           Standart Poll           </option>
						<option value="Image Poll">              Image Poll              </option>
						<option value="Video Poll">              Video Poll              </option>
						<option value="Standard Without Button"> Standard Without Button </option>
						<option value="Standart Without Button" style="display: none;"> Standart Without Button </option>
						<option value="Image Without Button">    Image Without Button    </option>
						<option value="Video Without Button">    Video Without Button    </option>
						<option value="Image in Question">       Image in Question       </option>
						<option value="Video in Question">       Video in Question       </option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="Total_Soft_Poll_AMSetDiv" id="Total_Soft_Poll_TMSetTable_1">
		<div class="Total_Soft_Poll_AMSetDiv_Buttons">
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_1_GO" onclick="TS_Poll_TM_But('1', 'GO')">General Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_1_QO" onclick="TS_Poll_TM_But('1', 'QO')">Question Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_1_AO" onclick="TS_Poll_TM_But('1', 'AO')">Answer Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_1_BO" onclick="TS_Poll_TM_But('1', 'BO')">Button Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_1_PO" onclick="TS_Poll_TM_But('1', 'PO')">Popup Option</div>
		</div>
		<div class="Total_Soft_Poll_AMSetDiv_Content">
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_1_GO">
				<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">General Options</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Max-Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Define the poll max width."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_1_MW" id="TotalSoft_Poll_1_MW" min="20" max="100" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_1_MW_Output" for="TotalSoft_Poll_1_MW"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Position <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Make a choice among the 3 positions for the poll: center, right, left."></i></div>
					<div class="TS_Poll_Option_Field">
						<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_1_Pos" id="TotalSoft_Poll_1_Pos">
							<option value="left">   Left   </option>
							<option value="right">  Right  </option>
							<option value="center"> Center </option>
						</select>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Add a border and adjust its width."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_1_BW" id="TotalSoft_Poll_1_BW" min="0" max="10" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_1_BW_Output" for="TotalSoft_Poll_1_BW"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Pick up a color for the element border."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="text" name="TotalSoft_Poll_1_BC" id="TotalSoft_Poll_1_BC" class="Total_Soft_Poll_T_Color" value="">
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Radius <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Determine the radius for the border."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_1_BR" id="TotalSoft_Poll_1_BR" min="0" max="50" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_1_BR_Output" for="TotalSoft_Poll_1_BR"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Shadow Type <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select the shadow type."></i></div>
					<div class="TS_Poll_Option_Field">
						<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_1_BoxSh_Type" id="TotalSoft_Poll_1_BoxSh_Type">
							<option value="none">  None      </option>
							<option value="true">  Shadow 1  </option>
							<option value="false"> Shadow 2  </option>
							<option value="sh03">  Shadow 3  </option>
							<option value="sh04">  Shadow 4  </option>
							<option value="sh05">  Shadow 5  </option>
							<option value="sh06">  Shadow 6  </option>
							<option value="sh07">  Shadow 7  </option>
							<option value="sh08">  Shadow 8  </option>
							<option value="sh09">  Shadow 9  </option>
							<option value="sh10">  Shadow 10 </option>
							<option value="sh11">  Shadow 11 </option>
						</select>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Shadow Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set the shadow color."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="text" name="TotalSoft_Poll_1_BoxShC" id="TotalSoft_Poll_1_BoxShC" class="Total_Soft_Poll_T_Color" value="">
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_1_QO">
				<div class="TS_Poll_Option_Divv1">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Question Option</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select a background color where can be seen the question."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_Q_BgC" id="TotalSoft_Poll_1_Q_BgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Adjust the color of the question text in poll."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_Q_C" id="TotalSoft_Poll_1_Q_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the text size on question."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_1_Q_FS" id="TotalSoft_Poll_1_Q_FS" min="8" max="48" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_1_Q_FS_Output" for="TotalSoft_Poll_1_Q_FS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Family <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferable font family for question. Poll plugin has a fonts base."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_1_Q_FF" id="TotalSoft_Poll_1_Q_FF">
								<?php for($i = 0; $i < count($TotalSoftFontGCount); $i++) { ?>
									<option value='<?php echo esc_attr($TotalSoftFontGCount[$i]);?>' style="font-family: <?php echo esc_attr($TotalSoftFontGCount[$i]);?>;"><?php echo esc_html($TotalSoftFontCount[$i]);?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Text Align <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the text position for question."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_1_Q_TA" id="TotalSoft_Poll_1_Q_TA">
								<option value="left">   Left   </option>
								<option value="right">  Right  </option>
								<option value="center"> Center </option>
							</select>
						</div>
					</div>
				</div>
				<div class="TS_Poll_Option_Divv2">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Line After Question</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Inside the poll between question and answer you may have lines or remove them."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_1_LAQ_W" id="TotalSoft_Poll_1_LAQ_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_1_LAQ_W_Output" for="TotalSoft_Poll_1_LAQ_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the height for separation line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_1_LAQ_H" id="TotalSoft_Poll_1_LAQ_H" min="0" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_1_LAQ_H_Output" for="TotalSoft_Poll_1_LAQ_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferred color to show the line of separation between the question and answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_LAQ_C" id="TotalSoft_Poll_1_LAQ_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Style <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify the basic style of the line and you can change it at any time. Select 4 different types of line: solid, dotted, dashed, none."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_1_LAQ_S" id="TotalSoft_Poll_1_LAQ_S">
								<option value="none">   None   </option>
								<option value="solid">  Solid  </option>
								<option value="dotted"> Dotted </option>
								<option value="dashed"> Dashed </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_1_AO">
				<div class="TS_Poll_Option_Divv1">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Answer Option</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Has Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Adjust the color of the answers text."></i></div>
						<div class="TS_Poll_Option_Field">
							<div class="switch">
								<input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_Poll_1_A_CTF" name="TotalSoft_Poll_1_A_CTF" >
								<label for="TotalSoft_Poll_1_A_CTF" data-on="Yes" data-off="No"></label>
							</div>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This option is for the answers. You can select font size. The size of the answer in responsive poll."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_1_A_FS" id="TotalSoft_Poll_1_A_FS" min="8" max="48" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_1_A_FS_Output" for="TotalSoft_Poll_1_A_FS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Main Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Here you can select your favourite main background color for theme."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_A_MBgC" id="TotalSoft_Poll_1_A_MBgC" class="Total_Soft_Poll_T_Color_1" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Use this option to change the color for background."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_A_BgC" id="TotalSoft_Poll_1_A_BgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the font color of element answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_A_C" id="TotalSoft_Poll_1_A_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Family <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the font for the poll answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_1_BoxSh" id="TotalSoft_Poll_1_BoxSh">
								<?php
									for($i = 0; $i < count($TotalSoftFontGCount); $i++)
									{ ?>
											<option value='<?php echo esc_attr($TotalSoftFontGCount[$i]);?>' style="font-family: <?php echo esc_attr($TotalSoftFontGCount[$i]);?>;"><?php echo esc_html($TotalSoftFontCount[$i]);?></option>
									<?php }
								?>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1">Line After Answers</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Inside the poll between answers and buttons you may have lines or remove them."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_1_LAA_W" id="TotalSoft_Poll_1_LAA_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_1_LAA_W_Output" for="TotalSoft_Poll_1_LAA_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the height for separation line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_1_LAA_H" id="TotalSoft_Poll_1_LAA_H" min="0" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_1_LAA_H_Output" for="TotalSoft_Poll_1_LAA_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferred color to show the line of separation between the answers and buttons."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_LAA_C" id="TotalSoft_Poll_1_LAA_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Style <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify the basic style of the line and you can change it at any time. Select 4 different types of line: solid, dotted, dashed, none."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_1_LAA_S" id="TotalSoft_Poll_1_LAA_S">
								<option value="none"  >   None   </option>
								<option value="solid" >  Solid  </option>
								<option value="dotted"> Dotted </option>
								<option value="dashed"> Dashed </option>
							</select>
						</div>
					</div>
				</div>
				<div class="TS_Poll_Option_Divv2">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Checkbox Option</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Check Many <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select an unlimited number of answers or no in one poll."></i></div>
						<div class="TS_Poll_Option_Field">
							<div class="switch">
								<input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_Poll_1_CH_CM" name="TotalSoft_Poll_1_CH_CM" >
								<label for="TotalSoft_Poll_1_CH_CM" data-on="Yes" data-off="No"></label>
							</div>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="The plugin allows to get most suitable check box that are most appropriate for your site. Select 4 different types for size."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_1_CH_S" id="TotalSoft_Poll_1_CH_S">
								<option value="small"    >    Small    </option>
								<option value="medium 1" > Medium 1 </option>
								<option value="medium 2" > Medium 2 </option>
								<option value="big" >      Big      </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Type Before Checking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This field be used for selecting the values from a list of checkboxes before checking."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_1_CH_TBC" id="TotalSoft_Poll_1_CH_TBC" style="font-family: 'FontAwesome', Arial;">
								<option value="f10c" > <?php echo '&#xf10c' . '&nbsp; ' . 'Circle O';?>       </option>
								<option value="f111" > <?php echo '&#xf111' . '&nbsp; ' . 'Circle';?>         </option>
								<option value="f096" > <?php echo '&#xf096' . '&nbsp; ' . 'Square O';?>       </option>
								<option value="f0c8" > <?php echo '&#xf0c8' . '&nbsp; ' . 'Square';?>         </option>
								<option value="f147" > <?php echo '&#xf147' . '&nbsp; ' . 'Minus Square O';?> </option>
								<option value="f146" > <?php echo '&#xf146' . '&nbsp; ' . 'Minus Square';?>   </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color Before Checking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select color for checkbox before checking."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_CH_CBC" id="TotalSoft_Poll_1_CH_CBC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Type After Clicking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This field be used for selecting the values from a list of checkboxes after checking."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_1_CH_TAC" id="TotalSoft_Poll_1_CH_TAC" style="font-family: 'FontAwesome', Arial;">
								<option value="f00c"> <?php echo '&#xf00c' . '&nbsp; ' . 'Check';?>          </option>
								<option value="f058"> <?php echo '&#xf058' . '&nbsp; ' . 'Check Circle';?>   </option>
								<option value="f05d"> <?php echo '&#xf05d' . '&nbsp; ' . 'Check Circle O';?> </option>
								<option value="f14a"> <?php echo '&#xf14a' . '&nbsp; ' . 'Check Square';?>   </option>
								<option value="f046"> <?php echo '&#xf046' . '&nbsp; ' . 'Check Square O';?> </option>
								<option value="f111"> <?php echo '&#xf111' . '&nbsp; ' . 'Circle';?>         </option>
								<option value="f192"> <?php echo '&#xf192' . '&nbsp; ' . 'Dot Circle O';?>   </option>
								<option value="f196"> <?php echo '&#xf196' . '&nbsp; ' . 'Plus Square O';?>  </option>
								<option value="f0fe"> <?php echo '&#xf0fe' . '&nbsp; ' . 'Plus Square';?>    </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color After Clicking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select color for checkbox after checking."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_CH_CAC" id="TotalSoft_Poll_1_CH_CAC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1">Answer Hover Option</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Use this option to change the hover color for background."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_A_HBgC" id="TotalSoft_Poll_1_A_HBgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the font hover color of element answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_1_A_HC" id="TotalSoft_Poll_1_A_HC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_1_BO">
				<img  src="<?php echo plugins_url('../Images/bo1.png',__FILE__);?>">
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_1_PO">
				<img  src="<?php echo plugins_url('../Images/po1.png',__FILE__);?>">
			</div>
		</div>
	</div>
	<div class="Total_Soft_Poll_AMSetDiv" id="Total_Soft_Poll_TMSetTable_2">
		<div class="Total_Soft_Poll_AMSetDiv_Buttons">
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_2_GO" onclick="TS_Poll_TM_But('2', 'GO')">General Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_2_QO" onclick="TS_Poll_TM_But('2', 'QO')">Question Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_2_AO" onclick="TS_Poll_TM_But('2', 'AO')">Answer Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_2_VO" onclick="TS_Poll_TM_But('2', 'VO')">Vote Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_2_BO" onclick="TS_Poll_TM_But('2', 'BO')">Results & Back Buttons</div>
		</div>
		<div class="Total_Soft_Poll_AMSetDiv_Content">
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_2_GO">
				<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">General Options</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Max-Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Define the poll max width by percents."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_2_MW" id="TotalSoft_Poll_2_MW" min="20" max="100" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_MW_Output" for="TotalSoft_Poll_2_MW"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Position <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Make a choice among the 3 positions for the poll: center, right or left."></i></div>
					<div class="TS_Poll_Option_Field">
						<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_Pos" id="TotalSoft_Poll_2_Pos">
							<option value="left">   Left   </option>
							<option value="right">  Right  </option>
							<option value="center"> Center </option>
						</select>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Add a border and adjust its width."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_2_BW" id="TotalSoft_Poll_2_BW" min="0" max="10" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_BW_Output" for="TotalSoft_Poll_2_BW"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Pick up a color for the element border."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="text" name="TotalSoft_Poll_2_BC" id="TotalSoft_Poll_2_BC" class="Total_Soft_Poll_T_Color" value="">
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Radius <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Determine the radius for the border."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_2_BR" id="TotalSoft_Poll_2_BR" min="0" max="50" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_BR_Output" for="TotalSoft_Poll_2_BR"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Shadow Type <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select the shadow type."></i></div>
					<div class="TS_Poll_Option_Field">
						<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_BoxSh_Type" id="TotalSoft_Poll_2_BoxSh_Type">
							<option value="none">  None      </option>
							<option value="true">  Shadow 1  </option>
							<option value="false"> Shadow 2  </option>
							<option value="sh03">  Shadow 3  </option>
							<option value="sh04">  Shadow 4  </option>
							<option value="sh05">  Shadow 5  </option>
							<option value="sh06">  Shadow 6  </option>
							<option value="sh07">  Shadow 7  </option>
							<option value="sh08">  Shadow 8  </option>
							<option value="sh09">  Shadow 9  </option>
							<option value="sh10">  Shadow 10 </option>
							<option value="sh11">  Shadow 11 </option>
						</select>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Shadow Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set the shadow color."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="text" name="TotalSoft_Poll_2_BoxShC" id="TotalSoft_Poll_2_BoxShC" class="Total_Soft_Poll_T_Color" value="">
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_2_QO">
				<div class="TS_Poll_Option_Divv1">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Question Option</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select a background color where can be seen the question."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_Q_BgC" id="TotalSoft_Poll_2_Q_BgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Adjust the color of the question text in poll."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_Q_C" id="TotalSoft_Poll_2_Q_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the text size on question."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_2_Q_FS" id="TotalSoft_Poll_2_Q_FS" min="8" max="48" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_Q_FS_Output" for="TotalSoft_Poll_2_Q_FS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Family <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferable font family for question. Poll plugin has a fonts base."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_Q_FF" id="TotalSoft_Poll_2_Q_FF">
								<?php for($i = 0; $i < count($TotalSoftFontGCount); $i++) { ?>
									<option value='<?php echo esc_attr($TotalSoftFontGCount[$i]);?>' style="font-family: <?php echo esc_attr($TotalSoftFontGCount[$i]);?>;"><?php echo esc_html($TotalSoftFontCount[$i]);?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Text Align <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the text position for question."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_Q_TA" id="TotalSoft_Poll_2_Q_TA">
								<option value="left">   Left   </option>
								<option value="right">  Right  </option>
								<option value="center"> Center </option>
							</select>
						</div>
					</div>
				</div>
				<div class="TS_Poll_Option_Divv2">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Line After Question</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Inside poll between question and photos you may have lines or remove them."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_2_LAQ_W" id="TotalSoft_Poll_2_LAQ_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_LAQ_W_Output" for="TotalSoft_Poll_2_LAQ_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the height for separation line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_2_LAQ_H" id="TotalSoft_Poll_2_LAQ_H" min="0" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_LAQ_H_Output" for="TotalSoft_Poll_2_LAQ_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferred color to show the line of separation between the question and photos."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_LAQ_C" id="TotalSoft_Poll_2_LAQ_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Style <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify the basic style of the line and you can change it at any time. Select 4 different types of line: solid, dotted, dashed, none."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_LAQ_S" id="TotalSoft_Poll_2_LAQ_S">
								<option value="none">   None   </option>
								<option value="solid">  Solid  </option>
								<option value="dotted"> Dotted </option>
								<option value="dashed"> Dashed </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_2_AO">
				<div class="TS_Poll_Option_Divv1">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Answer Option</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Column Count <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select the count of column in one row. There is no limitation for images."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range" name="TotalSoft_Poll_2_A_CC" id="TotalSoft_Poll_2_A_CC" min="1" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_A_CC_Output" for="TotalSoft_Poll_2_A_CC"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height Type <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the height to be fixed or by ratio."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_A_IHT" id="TotalSoft_Poll_2_A_IHT">
								<option value="fixed"> Fixed </option>
								<option value="ratio"> Ratio </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Image Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="It allows you to specify the prefered height of the image and it is all responsive."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_2_A_IH" id="TotalSoft_Poll_2_A_IH" min="50" max="800" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_A_IH_Output" for="TotalSoft_Poll_2_A_IH"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Image Ratio <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set the ratio of the image and it is all responsive."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_A_IHR" id="TotalSoft_Poll_2_A_IHR">
								<option value="1"> 1x1  </option>
								<option value="2"> 16x9 </option>
								<option value="3"> 9x16 </option>
								<option value="4"> 3x4  </option>
								<option value="5"> 4x3  </option>
								<option value="6"> 3x2  </option>
								<option value="7"> 2x3  </option>
								<option value="8"> 8x5  </option>
								<option value="9"> 5x8  </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Colors from Main Menu <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify main menu color."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_A_CA" id="TotalSoft_Poll_2_A_CA">
								<option value="Nothing"   >    For Nothing    </option>
								<option value="Color"      >      For Color      </option>
								<option value="Background" > For Background </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This option is for the answers. You can select font size."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_2_A_FS" id="TotalSoft_Poll_2_A_FS" min="8" max="48" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_A_FS_Output" for="TotalSoft_Poll_2_A_FS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Main Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Here you can select your favourite main background color for theme."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_A_MBgC" id="TotalSoft_Poll_2_A_MBgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Use this option to change the color for background."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_A_BgC" id="TotalSoft_Poll_2_A_BgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the font color of element answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_A_C" id="TotalSoft_Poll_2_A_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Position <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Make a choice among the 4 positions for the answer and checkbox."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_A_Pos" id="TotalSoft_Poll_2_A_Pos">
								<option value="Position 1" > Before Image               </option>
								<option value="Position 2" > Before Image Only Checkbox </option>
								<option value="Position 3" > After Image                </option>
								<option value="Position 4" > After Image Only Checkbox  </option>
								<option value="Position 5" > Left  </option>
								<option value="Position 6" > Right  </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Family <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the font for the poll answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_BoxSh" id="TotalSoft_Poll_2_BoxSh">
								<?php
									for($i = 0; $i < count($TotalSoftFontGCount); $i++)
									{ ?>
											<option value='<?php echo esc_attr($TotalSoftFontGCount[$i]);?>' style="font-family: <?php echo esc_attr($TotalSoftFontGCount[$i]);?>;"><?php echo esc_html($TotalSoftFontCount[$i]);?></option>
                                <?php
                                    }
								?>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1">Line After Answers</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Inside the poll between answer and vote button you may have lines or remove them."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_2_LAA_W" id="TotalSoft_Poll_2_LAA_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_LAA_W_Output" for="TotalSoft_Poll_2_LAA_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the height for separation line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_2_LAA_H" id="TotalSoft_Poll_2_LAA_H" min="0" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_LAA_H_Output" for="TotalSoft_Poll_2_LAA_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferred color to show the line of separation between the answers and vote button."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_LAA_C" id="TotalSoft_Poll_2_LAA_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Style <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify the basic style of the line and you can change it at any time. Select 4 different types of line: solid, dotted, dashed, none."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_LAA_S" id="TotalSoft_Poll_2_LAA_S">
								<option value="none"  >   None   </option>
								<option value="solid" >  Solid  </option>
								<option value="dotted"> Dotted </option>
								<option value="dashed"> Dashed </option>
							</select>
						</div>
					</div>
				</div>
				<div class="TS_Poll_Option_Divv2">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Checkbox Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Check Many <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose visitor will be able to choose one or more answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<div class="switch">
								<input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_Poll_2_CH_CM" name="TotalSoft_Poll_2_CH_CM">
								<label for="TotalSoft_Poll_2_CH_CM" data-on="Yes" data-off="No"></label>
							</div>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select 4 different types for size."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_CH_S" id="TotalSoft_Poll_2_CH_S">
								<option value="small"    >    Small    </option>
								<option value="medium 1" > Medium 1 </option>
								<option value="medium 2" > Medium 2 </option>
								<option value="big" >      Big      </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Type Before Checking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This field be used for selecting the values from a list of checkboxes."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_CH_TBC" id="TotalSoft_Poll_2_CH_TBC" style="font-family: 'FontAwesome', Arial;">
								<option value="f10c"> <?php echo '&#xf10c' . '&nbsp; ' . 'Circle O';?>       </option>
								<option value="f111"> <?php echo '&#xf111' . '&nbsp; ' . 'Circle';?>         </option>
								<option value="f096"> <?php echo '&#xf096' . '&nbsp; ' . 'Square O';?>       </option>
								<option value="f0c8"> <?php echo '&#xf0c8' . '&nbsp; ' . 'Square';?>         </option>
								<option value="f147"> <?php echo '&#xf147' . '&nbsp; ' . 'Minus Square O';?> </option>
								<option value="f146"> <?php echo '&#xf146' . '&nbsp; ' . 'Minus Square';?>   </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color Before Checking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select color for selected checkbox."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_CH_CBC" id="TotalSoft_Poll_2_CH_CBC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Type After Clicking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This field be used for selecting the values from a list of checkboxes."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_CH_TAC" id="TotalSoft_Poll_2_CH_TAC" style="font-family: 'FontAwesome', Arial;">
								<option value="f00c"> <?php echo '&#xf00c' . '&nbsp; ' . 'Check';?>          </option>
								<option value="f058"> <?php echo '&#xf058' . '&nbsp; ' . 'Check Circle';?>   </option>
								<option value="f05d"> <?php echo '&#xf05d' . '&nbsp; ' . 'Check Circle O';?> </option>
								<option value="f14a"> <?php echo '&#xf14a' . '&nbsp; ' . 'Check Square';?>   </option>
								<option value="f046"> <?php echo '&#xf046' . '&nbsp; ' . 'Check Square O';?> </option>
								<option value="f111"> <?php echo '&#xf111' . '&nbsp; ' . 'Circle';?>         </option>
								<option value="f192"> <?php echo '&#xf192' . '&nbsp; ' . 'Dot Circle O';?>   </option>
								<option value="f196"> <?php echo '&#xf196' . '&nbsp; ' . 'Plus Square O';?>  </option>
								<option value="f0fe"> <?php echo '&#xf0fe' . '&nbsp; ' . 'Plus Square';?>    </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color After Clicking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select color for selected checkbox."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_CH_CAC" id="TotalSoft_Poll_2_CH_CAC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1">Answer Hover Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Use this option to change the hover color for background."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_A_HBgC" id="TotalSoft_Poll_2_A_HBgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the font hover color of element answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_A_HC" id="TotalSoft_Poll_2_A_HC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Shadow <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose to show the shadow or no."></i></div>
						<div class="TS_Poll_Option_Field">
							<div class="switch">
								<input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_Poll_2_A_HSh_Show" name="TotalSoft_Poll_2_A_HSh_Show" >
								<label for="TotalSoft_Poll_2_A_HSh_Show" data-on="Yes" data-off="No"></label>
							</div>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Shadow Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select color which allows to show the shadow of the image."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_A_HShC" id="TotalSoft_Poll_2_A_HShC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1 Total_Soft_Poll_Video_Set">Play Icon Options</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_Video_Set">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select the icon color to open video."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_Play_IC" id="TotalSoft_Poll_2_Play_IC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_Video_Set">
						<div class="TS_Poll_Option_Name">Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Determine the size for the play icon."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_2_Play_IS" id="TotalSoft_Poll_2_Play_IS" min="8" max="150" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_2_Play_IS_Output" for="TotalSoft_Poll_2_Play_IS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_Video_Set">
						<div class="TS_Poll_Option_Name">Overlay Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select the color for overlay."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_2_Play_IOvC" id="TotalSoft_Poll_2_Play_IOvC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_Video_Set">
						<div class="TS_Poll_Option_Name">Icon Type <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="You can select play icons from a variety of beautifully designed sets for the opening video."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_2_Play_IT" id="TotalSoft_Poll_2_Play_IT" style="font-family: 'FontAwesome', Arial;">
								<option value=""    >     None                                                        </option>
								<option value="f04b"> <?php echo '&#xf04b' . '&nbsp; &nbsp;' . 'Play';?>          </option>
								<option value="f16a"> <?php echo '&#xf16a' . '&nbsp; ' . 'YouTube Play';?>        </option>
								<option value="f144"> <?php echo '&#xf144' . '&nbsp; &nbsp;' . 'Play Circle';?>   </option>
								<option value="f01d"> <?php echo '&#xf01d' . '&nbsp; &nbsp;' . 'Play Circle O';?> </option>
								<option value="f03d"> <?php echo '&#xf03d' . '&nbsp; ' . 'Video Camera';?>        </option>
								<option value="f26c"> <?php echo '&#xf26c' . '&nbsp; ' . 'Television';?>          </option>
								<option value="f008"> <?php echo '&#xf008' . '&nbsp; &nbsp;' . 'Film';?>          </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_2_VO">
				<img  src="<?php echo plugins_url('../Images/vo3.png',__FILE__);?>">		
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_2_BO">
				<img  src="<?php echo plugins_url('../Images/r2.png',__FILE__);?>">		
				
			</div>
		</div>
	</div>
	<div class="Total_Soft_Poll_AMSetDiv" id="Total_Soft_Poll_TMSetTable_3">
		<div class="Total_Soft_Poll_AMSetDiv_Buttons">
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_3_GO" onclick="TS_Poll_TM_But('3', 'GO')">General Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_3_QO" onclick="TS_Poll_TM_But('3', 'QO')">Question Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_3_AO" onclick="TS_Poll_TM_But('3', 'AO')">Answer Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_3_TV" onclick="TS_Poll_TM_But('3', 'TV')">Total Votes</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_3_VO" onclick="TS_Poll_TM_But('3', 'VO')">Vote Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_3_BO" onclick="TS_Poll_TM_But('3', 'BO')">Button Option</div>
		</div>
		<div class="Total_Soft_Poll_AMSetDiv_Content">
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_3_GO">
				<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">General Options</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Max-Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Define the max container width by percents."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_3_MW" id="TotalSoft_Poll_3_MW" min="20" max="100" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_MW_Output" for="TotalSoft_Poll_3_MW"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Position <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose where to place your theme relative to in page: center, right or left."></i></div>
					<div class="TS_Poll_Option_Field">
						<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_Pos" id="TotalSoft_Poll_3_Pos">
							<option value="left">   Left   </option>
							<option value="right">  Right  </option>
							<option value="center"> Center </option>
						</select>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Add a border and adjust its width."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_3_BW" id="TotalSoft_Poll_3_BW" min="0" max="10" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_BW_Output" for="TotalSoft_Poll_3_BW"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the border color for the main container."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="text" name="TotalSoft_Poll_3_BC" id="TotalSoft_Poll_3_BC" class="Total_Soft_Poll_T_Color" value="">
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Radius <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the border radius for the main container."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_3_BR" id="TotalSoft_Poll_3_BR" min="0" max="50" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_BR_Output" for="TotalSoft_Poll_3_BR"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Shadow Type <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select the shadow type."></i></div>
					<div class="TS_Poll_Option_Field">
						<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_BoxSh_Type" id="TotalSoft_Poll_3_BoxSh_Type">
							<option value="none">  None      </option>
							<option value="true">  Shadow 1  </option>
							<option value="false"> Shadow 2  </option>
							<option value="sh03">  Shadow 3  </option>
							<option value="sh04">  Shadow 4  </option>
							<option value="sh05">  Shadow 5  </option>
							<option value="sh06">  Shadow 6  </option>
							<option value="sh07">  Shadow 7  </option>
							<option value="sh08">  Shadow 8  </option>
							<option value="sh09">  Shadow 9  </option>
							<option value="sh10">  Shadow 10 </option>
							<option value="sh11">  Shadow 11 </option>
						</select>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Shadow Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set the shadow color."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="text" name="TotalSoft_Poll_3_BoxShC" id="TotalSoft_Poll_3_BoxShC" class="Total_Soft_Poll_T_Color" value="">
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_3_QO">
				<div class="TS_Poll_Option_Divv1">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Question Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select a background color where can be seen the question."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_Q_BgC" id="TotalSoft_Poll_3_Q_BgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Adjust the color of the question text in polling."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_Q_C" id="TotalSoft_Poll_3_Q_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the text size for question."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_3_Q_FS" id="TotalSoft_Poll_3_Q_FS" min="8" max="48" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_Q_FS_Output" for="TotalSoft_Poll_3_Q_FS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Family <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferable font family for question. Plugin has a fonts base."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_Q_FF" id="TotalSoft_Poll_3_Q_FF">
								<?php for($i = 0; $i < count($TotalSoftFontGCount); $i++) { ?>
									<option value='<?php echo esc_attr($TotalSoftFontGCount[$i]);?>' style="font-family: <?php echo esc_attr($TotalSoftFontGCount[$i]);?>;"><?php echo esc_html($TotalSoftFontCount[$i]);?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Text Align <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the text position for question."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_Q_TA" id="TotalSoft_Poll_3_Q_TA">
								<option value="left">   Left   </option>
								<option value="right">  Right  </option>
								<option value="center"> Center </option>
							</select>
						</div>
					</div>
				</div>
				<div class="TS_Poll_Option_Divv2">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Line After Question</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Inside poll between question and answers you may have line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_3_LAQ_W" id="TotalSoft_Poll_3_LAQ_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_LAQ_W_Output" for="TotalSoft_Poll_3_LAQ_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the height for separation line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_3_LAQ_H" id="TotalSoft_Poll_3_LAQ_H" min="0" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_LAQ_H_Output" for="TotalSoft_Poll_3_LAQ_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferred color to show the line of separation between the question and answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_LAQ_C" id="TotalSoft_Poll_3_LAQ_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Style <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify the basic style of the line and you can change it at any time. Select 4 different types of line: solid, dotted, dashed, none."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_LAQ_S" id="TotalSoft_Poll_3_LAQ_S">
								<option value="none">   None   </option>
								<option value="solid">  Solid  </option>
								<option value="dotted"> Dotted </option>
								<option value="dashed"> Dashed </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_3_AO">
				<div class="TS_Poll_Option_Divv1">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Answer Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Colors from Main Menu <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This function allows to choose from admin page of the selected color to use for answer color, background color or nothing."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_A_CA" id="TotalSoft_Poll_3_A_CA">
								<option value="Nothing"   >    For Nothing    </option>
								<option value="Color"     >      For Color      </option>
								<option value="Background"> For Background </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This option is for the answers. You can select font size."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_3_A_FS" id="TotalSoft_Poll_3_A_FS" min="8" max="48" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_A_FS_Output" for="TotalSoft_Poll_3_A_FS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Main Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your favourite main background color for theme."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_A_MBgC" id="TotalSoft_Poll_3_A_MBgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select Your favourite background color for answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_A_BgC" id="TotalSoft_Poll_3_A_BgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select Your favourite text color for answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_A_C" id="TotalSoft_Poll_3_A_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Border Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set the border width for the answer container which is currently displayed."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_3_A_BW" id="TotalSoft_Poll_3_A_BW" min="0" max="8" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_A_BW_Output" for="TotalSoft_Poll_3_A_BW"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Border Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set the border color for the answer container."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_A_BC" id="TotalSoft_Poll_3_A_BC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Border Radius <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Define the border radius of the overall answers container."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_3_A_BR" id="TotalSoft_Poll_3_A_BR" min="0" max="10" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_A_BR_Output" for="TotalSoft_Poll_3_A_BR"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Family <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the font for the poll answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_BoxSh" id="TotalSoft_Poll_3_BoxSh">
								<?php
									for($i = 0; $i < count($TotalSoftFontGCount); $i++)
									{ ?>
											<option value='<?php echo esc_attr($TotalSoftFontGCount[$i]);?>' style="font-family: <?php echo esc_attr($TotalSoftFontGCount[$i]);?>;"><?php echo esc_html($TotalSoftFontCount[$i]);?></option>
										<?php 
									}
								?>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1">Answer Hover Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Use this option to change the hover background color."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_A_HBgC" id="TotalSoft_Poll_3_A_HBgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the font hover color of element answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_A_HC" id="TotalSoft_Poll_3_A_HC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
				</div>
				<div class="TS_Poll_Option_Divv2">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Checkbox Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Show Checkbox <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose to show the checkboxes or no."></i></div>
						<div class="TS_Poll_Option_Field">
							<div class="switch">
								<input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_Poll_3_CH_Sh" name="TotalSoft_Poll_3_CH_Sh" >
								<label for="TotalSoft_Poll_3_CH_Sh" data-on="Yes" data-off="No"></label>
							</div>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select 4 different types for size."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_CH_S" id="TotalSoft_Poll_3_CH_S">
								<option value="small"    >    Small    </option>
								<option value="medium 1" > Medium 1 </option>
								<option value="medium 2" > Medium 2 </option>
								<option value="big" >      Big      </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Type Before Checking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This field be used for selecting the values from a list of checkboxes"></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_CH_TBC" id="TotalSoft_Poll_3_CH_TBC" style="font-family: 'FontAwesome', Arial;">
								<option value="f10c"> <?php echo '&#xf10c' . '&nbsp; ' . 'Circle O';?>       </option>
								<option value="f111"> <?php echo '&#xf111' . '&nbsp; ' . 'Circle';?>         </option>
								<option value="f096"> <?php echo '&#xf096' . '&nbsp; ' . 'Square O';?>       </option>
								<option value="f0c8"> <?php echo '&#xf0c8' . '&nbsp; ' . 'Square';?>         </option>
								<option value="f147"> <?php echo '&#xf147' . '&nbsp; ' . 'Minus Square O';?> </option>
								<option value="f146"> <?php echo '&#xf146' . '&nbsp; ' . 'Minus Square';?>   </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color Before Checking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select color for selected checkbox."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_CH_CBC" id="TotalSoft_Poll_3_CH_CBC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Type After Clicking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This field be used for selecting the values from a list of checkboxes"></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_CH_TAC" id="TotalSoft_Poll_3_CH_TAC" style="font-family: 'FontAwesome', Arial;">
								<option value="f00c"> <?php echo '&#xf00c' . '&nbsp; ' . 'Check';?>          </option>
								<option value="f058"> <?php echo '&#xf058' . '&nbsp; ' . 'Check Circle';?>   </option>
								<option value="f05d"> <?php echo '&#xf05d' . '&nbsp; ' . 'Check Circle O';?> </option>
								<option value="f14a"> <?php echo '&#xf14a' . '&nbsp; ' . 'Check Square';?>   </option>
								<option value="f046"> <?php echo '&#xf046' . '&nbsp; ' . 'Check Square O';?> </option>
								<option value="f111"> <?php echo '&#xf111' . '&nbsp; ' . 'Circle';?>         </option>
								<option value="f192"> <?php echo '&#xf192' . '&nbsp; ' . 'Dot Circle O';?>   </option>
								<option value="f196"> <?php echo '&#xf196' . '&nbsp; ' . 'Plus Square O';?>  </option>
								<option value="f0fe"> <?php echo '&#xf0fe' . '&nbsp; ' . 'Plus Square';?>    </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color After Clicking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select color for selected checkbox."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_CH_CAC" id="TotalSoft_Poll_3_CH_CAC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1">Line After Answers</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Inside the poll after answers you may have lines or remove them."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_3_LAA_W" id="TotalSoft_Poll_3_LAA_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_LAA_W_Output" for="TotalSoft_Poll_3_LAA_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the height for separation line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_3_LAA_H" id="TotalSoft_Poll_3_LAA_H" min="0" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_3_LAA_H_Output" for="TotalSoft_Poll_3_LAA_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferred color to show the line of separation after the answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_3_LAA_C" id="TotalSoft_Poll_3_LAA_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Style <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify the basic style of the line and you can change it at any time. Select 4 different types of line: solid, dotted, dashed, none."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_3_LAA_S" id="TotalSoft_Poll_3_LAA_S">
								<option value="none"   >   None   </option>
								<option value="solid"  >  Solid  </option>
								<option value="dotted" > Dotted </option>
								<option value="dashed" > Dashed </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_3_TV">
				<img src="<?php echo plugins_url('../Images/tv3.png',__FILE__);?>" >				
			</div>
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_3_VO">
				<img src="<?php echo plugins_url('../Images/vo3.png',__FILE__);?>" >
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_3_BO">
				<img src="<?php echo plugins_url('../Images/bo3.png',__FILE__);?>" >
			</div>
		</div>
	</div>
	<div class="Total_Soft_Poll_AMSetDiv" id="Total_Soft_Poll_TMSetTable_4">
		<div class="Total_Soft_Poll_AMSetDiv_Buttons">
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_4_GO" onclick="TS_Poll_TM_But('4', 'GO')">General Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_4_QO" onclick="TS_Poll_TM_But('4', 'QO')">Question Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_4_AO" onclick="TS_Poll_TM_But('4', 'AO')">Answer Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_4_IO" onclick="TS_Poll_TM_But('4', 'IO')">Image Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_4_PO" onclick="TS_Poll_TM_But('4', 'PO')">Popup Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_4_TV" onclick="TS_Poll_TM_But('4', 'TV')">Total Votes</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_4_VO" onclick="TS_Poll_TM_But('4', 'VO')">Vote Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_4_BO" onclick="TS_Poll_TM_But('4', 'BO')">Button Option</div>
		</div>
		<div class="Total_Soft_Poll_AMSetDiv_Content">
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_4_GO">
				<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">General Options</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Max-Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Define the max width for main container."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_4_MW" id="TotalSoft_Poll_4_MW" min="20" max="100" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_MW_Output" for="TotalSoft_Poll_4_MW"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Position <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Make a choice among the 3 positions for the poll builder: center, right or left."></i></div>
					<div class="TS_Poll_Option_Field">
						<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_4_Pos" id="TotalSoft_Poll_4_Pos">
							<option value="left">   Left   </option>
							<option value="right">  Right  </option>
							<option value="center"> Center </option>
						</select>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Add a border and adjust its width."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_4_BW" id="TotalSoft_Poll_4_BW" min="0" max="10" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_BW_Output" for="TotalSoft_Poll_4_BW"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Color </span> <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Pick up a color for the element border."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="text" name="TotalSoft_Poll_4_BC" id="TotalSoft_Poll_4_BC" class="Total_Soft_Poll_T_Color" value="">
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Radius <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Determine the radius for the border."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_4_BR" id="TotalSoft_Poll_4_BR" min="0" max="50" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_BR_Output" for="TotalSoft_Poll_4_BR"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Shadow Type <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select the shadow type."></i></div>
					<div class="TS_Poll_Option_Field">
						<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_4_BoxSh_Type" id="TotalSoft_Poll_4_BoxSh_Type">
							<option value="none">  None      </option>
							<option value="true">  Shadow 1  </option>
							<option value="false"> Shadow 2  </option>
							<option value="sh03">  Shadow 3  </option>
							<option value="sh04">  Shadow 4  </option>
							<option value="sh05">  Shadow 5  </option>
							<option value="sh06">  Shadow 6  </option>
							<option value="sh07">  Shadow 7  </option>
							<option value="sh08">  Shadow 8  </option>
							<option value="sh09">  Shadow 9  </option>
							<option value="sh10">  Shadow 10 </option>
							<option value="sh11">  Shadow 11 </option>
						</select>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Shadow Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set the shadow color."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="text" name="TotalSoft_Poll_4_BoxShC" id="TotalSoft_Poll_4_BoxShC" class="Total_Soft_Poll_T_Color" value="">
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_4_QO">
				<div class="TS_Poll_Option_Divv1">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Question Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select a background color where can be seen the question."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_4_Q_BgC" id="TotalSoft_Poll_4_Q_BgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Adjust the color of the question text in poll builder."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_4_Q_C" id="TotalSoft_Poll_4_Q_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the text size for question."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_4_Q_FS" id="TotalSoft_Poll_4_Q_FS" min="8" max="48" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_Q_FS_Output" for="TotalSoft_Poll_4_Q_FS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Family <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferable font family for question. Plugin has a fonts base."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_4_Q_FF" id="TotalSoft_Poll_4_Q_FF">
								<?php for($i = 0; $i < count($TotalSoftFontGCount); $i++) { ?>
									<option value='<?php echo esc_attr($TotalSoftFontGCount[$i]);?>' style="font-family: <?php echo esc_attr($TotalSoftFontGCount[$i]);?>;"><?php echo esc_html($TotalSoftFontCount[$i]);?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Text Align <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the text position for social question."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_4_Q_TA" id="TotalSoft_Poll_4_Q_TA">
								<option value="left">   Left   </option>
								<option value="right">  Right  </option>
								<option value="center"> Center </option>
							</select>
						</div>
					</div>
				</div>
				<div class="TS_Poll_Option_Divv2">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Line After Question</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Inside poll between question and answers you may have lines or remove them."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_4_LAQ_W" id="TotalSoft_Poll_4_LAQ_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_LAQ_W_Output" for="TotalSoft_Poll_4_LAQ_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the height for separation line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_4_LAQ_H" id="TotalSoft_Poll_4_LAQ_H" min="0" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_LAQ_H_Output" for="TotalSoft_Poll_4_LAQ_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferred color to show the line of separation between the question and answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_4_LAQ_C" id="TotalSoft_Poll_4_LAQ_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Style <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify the basic style of the line and you can change it at any time. Select 4 different types of line: solid, dotted, dashed, none."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_4_LAQ_S" id="TotalSoft_Poll_4_LAQ_S">
								<option value="none">   None   </option>
								<option value="solid">  Solid  </option>
								<option value="dotted"> Dotted </option>
								<option value="dashed"> Dashed </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_4_AO">
				<div class="TS_Poll_Option_Divv1">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Answer Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Colors from Main Menu <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This function allows to choose from admin page of the selected color to use for answer color, background color or nothing."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_4_A_CA" id="TotalSoft_Poll_4_A_CA">
								<option value="Nothing"    >    For Nothing    </option>
								<option value="Color"    >      For Color      </option>
								<option value="Background" > For Background </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This option is for the answers. You can select font size."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_4_A_FS" id="TotalSoft_Poll_4_A_FS" min="8" max="48" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_A_FS_Output" for="TotalSoft_Poll_4_A_FS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Main Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the main background color of the element where answers is placed."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_4_A_MBgC" id="TotalSoft_Poll_4_A_MBgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Use this option to change the background color."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_4_A_BgC" id="TotalSoft_Poll_4_A_BgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the font color of element answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_4_A_C" id="TotalSoft_Poll_4_A_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Border Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set the width of the borders around the opinion container."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_4_A_BW" id="TotalSoft_Poll_4_A_BW" min="0" max="8" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_A_BW_Output" for="TotalSoft_Poll_4_A_BW"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Border Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set the color of the borders around the opinion container."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_4_A_BC" id="TotalSoft_Poll_4_A_BC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Border Radius <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set radius of the borders around answers container."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_4_A_BR" id="TotalSoft_Poll_4_A_BR" min="0" max="10" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_A_BR_Output" for="TotalSoft_Poll_4_A_BR"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Family <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferable font family for answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_4_A_FF" id="TotalSoft_Poll_4_A_FF">
								<?php
									for($i = 0; $i < count($TotalSoftFontGCount); $i++)
									{
										 ?>
											<option value='<?php echo esc_attr($TotalSoftFontGCount[$i]);?>' style="font-family: <?php echo esc_attr($TotalSoftFontGCount[$i]);?>;"><?php echo esc_html($TotalSoftFontCount[$i]);?></option>
									<?php 
									}
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="TS_Poll_Option_Divv2">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Answer Hover Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Use this option to determine the hover background color for answers field."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_4_A_HBgC" id="TotalSoft_Poll_4_A_HBgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the font hover color of answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_4_A_HC" id="TotalSoft_Poll_4_A_HC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1">Line After Answers</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Inside the poll after answers you may have lines or no."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_4_LAA_W" id="TotalSoft_Poll_4_LAA_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_LAA_W_Output" for="TotalSoft_Poll_4_LAA_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the height for separation line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_4_LAA_H" id="TotalSoft_Poll_4_LAA_H" min="0" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_4_LAA_H_Output" for="TotalSoft_Poll_4_LAA_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferred color to show the line of separation after answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_4_LAA_C" id="TotalSoft_Poll_4_LAA_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Style <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify the basic style of the line and you can change it at any time."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_4_LAA_S" id="TotalSoft_Poll_4_LAA_S">
								<option value="none"   >   None   </option>
								<option value="solid"  >  Solid  </option>
								<option value="dotted" > Dotted </option>
								<option value="dashed" > Dashed </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_4_IO">
				<img src="<?php echo plugins_url('../Images/io4.png',__FILE__);?>">
			</div>
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_4_PO">
				<img src="<?php echo plugins_url('../Images/po4.png',__FILE__);?>">
			</div>
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_4_TV">
				<img src="<?php echo plugins_url('../Images/tv4.png',__FILE__);?>">
				
			</div>
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_4_VO">
				<img src="<?php echo plugins_url('../Images/vo4.png',__FILE__);?>">
				
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_4_BO">
				<img src="<?php echo plugins_url('../Images/bo4.png',__FILE__);?>">
				
			</div>
		</div>
	</div>
	<div class="Total_Soft_Poll_AMSetDiv" id="Total_Soft_Poll_TMSetTable_5">
		<div class="Total_Soft_Poll_AMSetDiv_Buttons">
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_5_GO" onclick="TS_Poll_TM_But('5', 'GO')">General Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_5_QO" onclick="TS_Poll_TM_But('5', 'QO')">Question Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_5_AO" onclick="TS_Poll_TM_But('5', 'AO')">Answer Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_5_TV" onclick="TS_Poll_TM_But('5', 'TV')">Total Votes</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_5_VO" onclick="TS_Poll_TM_But('5', 'VO')">Vote Option</div>
			<div class="Total_Soft_Poll_AMSetDiv_Button" id="TS_Poll_TM_TBut_5_BO" onclick="TS_Poll_TM_But('5', 'BO')">Results & Back Buttons</div>
		</div>
		<div class="Total_Soft_Poll_AMSetDiv_Content">
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_5_GO">
				<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">General Options</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Max-Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Define the max width for main container."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_5_MW" id="TotalSoft_Poll_5_MW" min="20" max="100" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_MW_Output" for="TotalSoft_Poll_5_MW"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Position <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Make a choice among the 3 positions for the poll builder: center, right or left."></i></div>
					<div class="TS_Poll_Option_Field">
						<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_Pos" id="TotalSoft_Poll_5_Pos">
							<option value="left">   Left   </option>
							<option value="right">  Right  </option>
							<option value="center"> Center </option>
						</select>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Add a border and adjust its width."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_5_BW" id="TotalSoft_Poll_5_BW" min="0" max="10" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_BW_Output" for="TotalSoft_Poll_5_BW"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set a color for the element border. "></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="text" name="TotalSoft_Poll_5_BC" id="TotalSoft_Poll_5_BC" class="Total_Soft_Poll_T_Color" value="">
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Border Radius <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Determine the radius for the border."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_5_BR" id="TotalSoft_Poll_5_BR" min="0" max="50" value="">
						<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_BR_Output" for="TotalSoft_Poll_5_BR"></output>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Shadow Type <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select the shadow type."></i></div>
					<div class="TS_Poll_Option_Field">
						<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_BoxSh_Type" id="TotalSoft_Poll_5_BoxSh_Type">
							<option value="none">  None      </option>
							<option value="true">  Shadow 1  </option>
							<option value="false"> Shadow 2  </option>
							<option value="sh03">  Shadow 3  </option>
							<option value="sh04">  Shadow 4  </option>
							<option value="sh05">  Shadow 5  </option>
							<option value="sh06">  Shadow 6  </option>
							<option value="sh07">  Shadow 7  </option>
							<option value="sh08">  Shadow 8  </option>
							<option value="sh09">  Shadow 9  </option>
							<option value="sh10">  Shadow 10 </option>
							<option value="sh11">  Shadow 11 </option>
						</select>
					</div>
				</div>
				<div class="TS_Poll_Option_Div1">
					<div class="TS_Poll_Option_Name">Shadow Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set the shadow color."></i></div>
					<div class="TS_Poll_Option_Field">
						<input type="text" name="TotalSoft_Poll_5_BoxShC" id="TotalSoft_Poll_5_BoxShC" class="Total_Soft_Poll_T_Color" value="">
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_5_QO">
				<div class="TS_Poll_Option_Divv1">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Question Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select a background color where can be seen the question."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_Q_BgC" id="TotalSoft_Poll_5_Q_BgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Adjust the color of the question text in poll builder."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_Q_C" id="TotalSoft_Poll_5_Q_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the text size on question by pixels."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_5_Q_FS" id="TotalSoft_Poll_5_Q_FS" min="8" max="48" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_Q_FS_Output" for="TotalSoft_Poll_5_Q_FS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Family <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferable font family for question. Plugin has a fonts base."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_Q_FF" id="TotalSoft_Poll_5_Q_FF">
								<?php for($i = 0; $i < count($TotalSoftFontGCount); $i++) { ?>
									<option value='<?php echo esc_attr($TotalSoftFontGCount[$i]);?>' style="font-family: <?php echo esc_attr($TotalSoftFontGCount[$i]);?>;"><?php echo esc_html($TotalSoftFontCount[$i]);?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Text Align <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the text position for social question."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_Q_TA" id="TotalSoft_Poll_5_Q_TA">
								<option value="left">   Left   </option>
								<option value="right">  Right  </option>
								<option value="center"> Center </option>
							</select>
						</div>
					</div>
				</div>
				<div class="TS_Poll_Option_Divv2">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Line After Question</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Inside social poll between question and answers you may have lines or remove them."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_5_LAQ_W" id="TotalSoft_Poll_5_LAQ_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_LAQ_W_Output" for="TotalSoft_Poll_5_LAQ_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the height for separation line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_5_LAQ_H" id="TotalSoft_Poll_5_LAQ_H" min="0" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_LAQ_H_Output" for="TotalSoft_Poll_5_LAQ_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferred color to show the line of separation between the question and answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_LAQ_C" id="TotalSoft_Poll_5_LAQ_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Style <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify the basic style of the line and you can change it at any time. Select 4 different types of line: solid, dotted, dashed, none."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_LAQ_S" id="TotalSoft_Poll_5_LAQ_S">
								<option value="none">   None   </option>
								<option value="solid">  Solid  </option>
								<option value="dotted"> Dotted </option>
								<option value="dashed"> Dashed </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1 TSPVIQ">Video in Question</div>
					<div class="TS_Poll_Option_Div1 TSPVIQ">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="It allows you to specify the prefered width for video."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_5_V_W" id="TotalSoft_Poll_5_V_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_V_W_Output" for="TotalSoft_Poll_5_V_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1 TSPIIQ">Image in Question</div>
					<div class="TS_Poll_Option_Div1 TSPIIQ">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="It allows you to specify the prefered height for image."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_5_I_H" id="TotalSoft_Poll_5_I_H" min="20" max="500" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_I_H_Output" for="TotalSoft_Poll_5_I_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 TSPIIQ">
						<div class="TS_Poll_Option_Name">Ratio <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="It allows you to specify the prefered ratio of the image."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_I_Ra" id="TotalSoft_Poll_5_I_Ra">
								<option value="1"> 1x1  </option>
								<option value="2"> 16x9 </option>
								<option value="3"> 9x16 </option>
								<option value="4"> 3x4  </option>
								<option value="5"> 4x3  </option>
								<option value="6"> 3x2  </option>
								<option value="7"> 2x3  </option>
								<option value="8"> 8x5  </option>
								<option value="9"> 5x8  </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_5_AO">
				<div class="TS_Poll_Option_Divv1">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Answer Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Colors from Main Menu <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This function allows to choose from admin page of the selected color to use for answer color, background color or nothing."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_A_CA" id="TotalSoft_Poll_5_A_CA">
								<option value="Nothing"    >    For Nothing    </option>
								<option value="Color"      >      For Color      </option>
								<option value="Background" > For Background </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This option is for the answers. You can select font size."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_5_A_FS" id="TotalSoft_Poll_5_A_FS" min="8" max="48" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_A_FS_Output" for="TotalSoft_Poll_5_A_FS"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Main Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the main background color of the element where answers is placed."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_A_MBgC" id="TotalSoft_Poll_5_A_MBgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Use this option to change the background color."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_A_BgC" id="TotalSoft_Poll_5_A_BgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the font color of element answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_A_C" id="TotalSoft_Poll_5_A_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Border Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the width of the borders around the opinion container."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_5_A_BW" id="TotalSoft_Poll_5_A_BW" min="0" max="8" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_A_BW_Output" for="TotalSoft_Poll_5_A_BW"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Border Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the color of the borders around the opinion container."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_A_BC" id="TotalSoft_Poll_5_A_BC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Border Radius <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Set radius of the borders around answers container."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_5_A_BR" id="TotalSoft_Poll_5_A_BR" min="0" max="10" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_A_BR_Output" for="TotalSoft_Poll_5_A_BR"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Font Family <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the font for the poll answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_BoxSh" id="TotalSoft_Poll_5_BoxSh">
								<?php
									for($i = 0; $i < count($TotalSoftFontGCount); $i++)
									{
								?>
											<option value='<?php echo esc_attr($TotalSoftFontGCount[$i]);?>' style="font-family: <?php echo esc_attr($TotalSoftFontGCount[$i]);?>;"><?php echo esc_html($TotalSoftFontCount[$i]);?></option>
								<?php 
									}
								?>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1">Answer Hover Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Background Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Use this option to change the hover background color."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_A_HBgC" id="TotalSoft_Poll_5_A_HBgC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Change the font hover color for element answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_A_HC" id="TotalSoft_Poll_5_A_HC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
				</div>
				<div class="TS_Poll_Option_Divv2">
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles">Checkbox Options</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Size <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="The poll builder plugin allows to get most suitable check box that are most appropriate for your site. Select 4 different types for size."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_CH_S" id="TotalSoft_Poll_5_CH_S">
								<option value="small"    >    Small    </option>
								<option value="medium 1" > Medium 1 </option>
								<option value="medium 2"> Medium 2 </option>
								<option value="big">      Big      </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Type Before Checking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This field be used for selecting the values from a list of checkboxes."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_CH_TBC" id="TotalSoft_Poll_5_CH_TBC" style="font-family: 'FontAwesome', Arial;">
								<option value="f10c" > <?php echo '&#xf10c' . '&nbsp; ' . 'Circle O';?>       </option>
								<option value="f111" > <?php echo '&#xf111' . '&nbsp; ' . 'Circle';?>         </option>
								<option value="f096" > <?php echo '&#xf096' . '&nbsp; ' . 'Square O';?>       </option>
								<option value="f0c8" > <?php echo '&#xf0c8' . '&nbsp; ' . 'Square';?>         </option>
								<option value="f147" > <?php echo '&#xf147' . '&nbsp; ' . 'Minus Square O';?> </option>
								<option value="f146" > <?php echo '&#xf146' . '&nbsp; ' . 'Minus Square';?>   </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color Before Checking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select color for checkbox before checking."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_CH_CBC" id="TotalSoft_Poll_5_CH_CBC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Type After Clicking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="This field be used for selecting the values from a list of checkboxes."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_CH_TAC" id="TotalSoft_Poll_5_CH_TAC" style="font-family: 'FontAwesome', Arial;">
								<option value="f00c" > <?php echo '&#xf00c' . '&nbsp; ' . 'Check';?>          </option>
								<option value="f058" > <?php echo '&#xf058' . '&nbsp; ' . 'Check Circle';?>   </option>
								<option value="f05d" > <?php echo '&#xf05d' . '&nbsp; ' . 'Check Circle O';?> </option>
								<option value="f14a" > <?php echo '&#xf14a' . '&nbsp; ' . 'Check Square';?>   </option>
								<option value="f046" > <?php echo '&#xf046' . '&nbsp; ' . 'Check Square O';?> </option>
								<option value="f111" > <?php echo '&#xf111' . '&nbsp; ' . 'Circle';?>         </option>
								<option value="f192" > <?php echo '&#xf192' . '&nbsp; ' . 'Dot Circle O';?>   </option>
								<option value="f196" > <?php echo '&#xf196' . '&nbsp; ' . 'Plus Square O';?>  </option>
								<option value="f0fe" > <?php echo '&#xf0fe' . '&nbsp; ' . 'Plus Square';?>    </option>
							</select>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color After Clicking <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select color for checkbox after checking."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_CH_CAC" id="TotalSoft_Poll_5_CH_CAC" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1 Total_Soft_Poll_TMTitles Total_Soft_Poll_TMTitles1">Line After Answers</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Width <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Inside the poll after answer you may have lines or remove them."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangeper" name="TotalSoft_Poll_5_LAA_W" id="TotalSoft_Poll_5_LAA_W" min="0" max="100" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_LAA_W_Output" for="TotalSoft_Poll_5_LAA_W"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Height <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Choose the height for separation line."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="range" class="TotalSoft_Poll_Range TotalSoft_Poll_Rangepx" name="TotalSoft_Poll_5_LAA_H" id="TotalSoft_Poll_5_LAA_H" min="0" max="5" value="">
							<output class="TotalSoft_Poll_Out" name="" id="TotalSoft_Poll_5_LAA_H_Output" for="TotalSoft_Poll_5_LAA_H"></output>
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Color <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Select your preferred color to show the line of separation after answers."></i></div>
						<div class="TS_Poll_Option_Field">
							<input type="text" name="TotalSoft_Poll_5_LAA_C" id="TotalSoft_Poll_5_LAA_C" class="Total_Soft_Poll_T_Color" value="">
						</div>
					</div>
					<div class="TS_Poll_Option_Div1">
						<div class="TS_Poll_Option_Name">Style <i class="Total_Soft_Poll_Help1 totalsoft totalsoft-question-circle-o" title="Identify the basic style of the line and you can change it at any time. Select 4 different types of line: solid, dotted, dashed, none."></i></div>
						<div class="TS_Poll_Option_Field">
							<select class="Total_Soft_Poll_Select" name="TotalSoft_Poll_5_LAA_S" id="TotalSoft_Poll_5_LAA_S">
								<option value="none"   >   None   </option>
								<option value="solid"  >  Solid  </option>
								<option value="dotted" > Dotted </option>
								<option value="dashed" > Dashed </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="TS_Poll_Option_Div" id="Total_Soft_Poll_AMSetTable_5_TV">
				<img  src="<?php echo plugins_url('../Images/tv5.png',__FILE__);?>">
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_5_VO">
				<img  src="<?php echo plugins_url('../Images/vo5.png',__FILE__);?>">
			</div>
			<div class="TS_Poll_Option_Div TS_Poll_Option_Divv" id="Total_Soft_Poll_AMSetTable_5_BO">
				<img  src="<?php echo plugins_url('../Images/r5.png',__FILE__);?>">
			</div>
		</div>
	</div>
</form>
