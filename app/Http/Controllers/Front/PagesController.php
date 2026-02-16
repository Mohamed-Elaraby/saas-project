<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    public function index(Request $request)
    {

        $viewName = 'front.'.$request -> segment(1).'.'.$request -> segment(2);
        $webDevelopmentTags = ["Web Development", "Custom Web Development", "Responsive Design", "SEO", "SEO Friendly Websites", "Fast Loading Websites", "Secure Web Platforms", "Web Design", "Website Development", "Digital Transformation", "Modern Web Development", "User Experience", "UX Design", "Frontend Development", "Backend Development", "HTML5", "CSS3", "JavaScript", "ReactJS", "AngularJS", "VueJS", "NodeJS", "PHP", "Python", "Ecommerce Development", "Web Technologies", "Web Development Process", "Business Growth", "Web Solutions", "Web Programming", "Website Optimization", "Content Management Systems", "WordPress Development", "Shopify", "Magento", "Web Security", "Professional Web Development", "Web Development Services", "Custom Web Solutions", "SEVENSCAPITAL", "Web Performance", "Web Support", "Technology Driven"];
        $softwareSolutionsTags = ["Software Solutions", "Custom Software Development", "Enterprise Systems", "Scalable Platforms", "Secure Software", "Business Software", "Software Development", "Software Services", "Innovative Software", "Digital Transformation", "Agile Development", "Python", "Java", "CSharp", "JavaScript", "Django", "Flask", ".NET", "Spring Boot", "AWS", "Azure", "Google Cloud", "MySQL", "PostgreSQL", "MongoDB", "Oracle", "Cloud Computing", "Data Security", "Business Growth", "Software Testing", "Maintenance and Support", "Professional Software Development", "SEVENSCAPITAL"];
        $UIUXDesignTags = ["UI/UX Design", "User Experience Design", "User Interface Design", "UX Strategy", "Responsive Design", "Web Design", "Mobile App Design", "UI Prototyping", "Usability Testing", "UX Research", "UI Wireframing", "Digital Transformation", "User Journey Mapping", "Professional UI Design", "Intuitive UX Design", "SEVENSCAPITAL", "UX Optimization", "UI/UX Services"];
        $digitalTransformationTags = ["Digital Transformation", "Tech Innovation", "Business Transformation", "Digital Solutions", "Innovation in Tech", "Tech Trends", "Digital Strategy", "Future of Business", "Digital Transformation Journey", "Business Growth", "Technology Solutions", "Digital Experience", "Transformation in Business", "Disruptive Technologies", "Digital Era"];
        $sparePartsSystemTags = ["SparePartsManagement", "InventoryManagement", "OrderProcessing", "StockReplenishment", "DigitalTransformation", "BusinessSoftware", "AutomotiveIndustry", "CustomSoftware", "OperationalEfficiency", "SEVENSCAPITAL", "SoftwareCompanyUAE", "SoftwareCompanySaudi", "CustomSoftwareUAE", "CustomSoftwareSaudi", "ITSolutionsUAE", "ITSolutionsSaudi", "TechCompanyDubai", "TechCompanyRiyadh", "BusinessSoftwareUAE", "BusinessSoftwareSaudi"];
        $automotiveTags = ["Automotive Service Center Management System", "Car Service Center Software", "Automotive Management Software", "Car Workshop Management System", "Vehicle Maintenance System", "Car Repair Software", "Service Center Management", "Automotive Workshop Software", "Car Maintenance Solutions", "Automotive Business Solutions", "Workshop Inventory Management", "Automotive Service Center Solution", "Vehicle Service Management", "Service Center Management System", "Automotive CRM", "Repair Shop Software", "Fleet Management", "Car Service Management", "Workshop Scheduling System", "Automotive Business Software", "Car Repair Shop Solutions", "Vehicle Maintenance Software", "Automotive Parts Management", "Garage Management System", "Automotive Industry Software", "Car Service Center Inventory", "Customer Relationship Management for Auto Services", "Workshop Performance Tracking", "Automotive Service Software", "Car Repair Shop Management", "Automotive Service Center UAE", "Automotive Service Center KSA", "Car Service Center UAE", "Car Workshop Management UAE", "Car Repair Software UAE", "Car Service Management Saudi Arabia", "Automotive Management System Saudi Arabia"];



        if (View::exists($viewName)) {
            return view($viewName, compact('webDevelopmentTags', 'softwareSolutionsTags', 'UIUXDesignTags', 'digitalTransformationTags', 'sparePartsSystemTags', 'automotiveTags'));
        } else {
            return abort(404);
        }
    }
}
