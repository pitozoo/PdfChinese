<?php

/**
 * @name 支持中文的pdf插件 演示
 * @authors Pitozoo (pitozoo@sina.com)
 * @date    2020-11-13 09:04:00
 *
 */

require_once './src/PdfChinese.php';

$pdf = new PdfChinese();


## 设置字体
$pdf->AddGBFont('simhei', '黑体');
$pdf->AddPage();
$pdf->SetFont('simhei', '', 13);


## 自动换行
$timeStr = date( 'Y-m-d H:i:s' );
var_dump( $timeStr );
$pdf->MultiCell(180, 10, iconv("utf-8", "gbk", "中文标题xxx" .$timeStr ));


## 显示一格
$pdf->Cell(40, 10, iconv("utf-8", "gbk", "第一个单元格"));
$pdf->Ln();
$pdf->Cell(40, 10, iconv("utf-8", "gbk", "第二个单元格"));
$pdf->Ln();


## 输出表格
## Cell方法最后一个参数表示是否显示边框
$pdf->Cell(60, 10, iconv("utf-8", "gbk", "Username"), 1);
$pdf->Cell(60, 10, iconv("utf-8", "gbk", "Gender"), 1);
$pdf->Ln();
$pdf->Cell(60, 10, iconv("utf-8", "gbk", "赵武"), 1);
$pdf->Cell(60, 10, iconv("utf-8", "gbk", "男"), 1);
$pdf->Ln();
$pdf->Cell(60, 10, iconv("utf-8", "gbk", "李四"), 1);
$pdf->Cell(60, 10, iconv("utf-8", "gbk", "女"), 1);
$pdf->Ln();



## 保存为pdf文件
$pdf->Output( 'F' , 'test.pdf' );


