<?php
function StatWarna($stat)
{
    //ijo#78e08f merah#e55039 kuning#fad390
    switch($stat){
        case 'shipped':
            return 'background-color: #78e08f;';
            break;
        case 'on progress':
            return 'background-color: #fad390;';
            break;
        case 'pending':
            return 'background-color: #e55039;';
            break;
        case 'cancelled':
            return 'background-color: #e55039;';
            break;
    }
}

function StatBTPay($stat)
{
    switch($stat){
        case 'paid':
            return 'display: none;';
            break;
        case 'unpaid':
            return '';
            break;
    }
}

function StatHDPay($stat)
{
    switch($stat){
        case 'paid':
            return 'background-color: #78e08f;';
            break;
        case 'unpaid':
            return 'background-color: #e55039;';
            break;
    }
}