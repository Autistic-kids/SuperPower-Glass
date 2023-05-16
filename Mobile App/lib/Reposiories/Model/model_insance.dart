import 'package:flutter/material.dart';
import 'package:kids/Reposiories/Model/sensor.dart';
import 'package:kids/view/profile.dart';
import 'package:kids/view/sensors.dart';
import 'package:kids/view/videos.dart';


String activeUserID = "";

int activeIndex = 0;

List<Widget> pages = [const Sensors(), const Videos(), const Profile()];
List<BottomNavigationBarItem> navigations = [
  const BottomNavigationBarItem(icon: Icon(Icons.sensors), label: "Sensors", backgroundColor: Color(0xFF36429E)),
  const BottomNavigationBarItem(icon: Icon(Icons.ondemand_video), label: "Educational", backgroundColor: Color(0xFF36429E)),
  const BottomNavigationBarItem(icon: Icon(Icons.person), label: "Profile", backgroundColor: Color(0xFF36429E)),
];
List<Sensor> sensors = [

  // Falling Sensor
  Sensor(
    id: 1,
    name: "Fall Detector",
    description: "FallDetector",
    unit: "",
    value: "--",
    icon: Image.asset(
      "images/1.png",
      fit: BoxFit.contain,
    ),
  ),
  Sensor(
    id: 5,
    name: "Temperature",
    description: "Temperature",
    unit: "°C",
    value: "--",
    icon: Image.asset(
      "images/5.png",
      fit: BoxFit.contain,
    ),
  ),
  // mood Sensor
  Sensor(
    id: 2,
    name: "Stress Rate",
    description: "StressRate",
    unit: "",
    value: "--",
    icon: Image.asset(
      "images/2.png",
      fit: BoxFit.contain,
    ),
  ),

  // Respirations Sensor
  Sensor(
    id: 3,
    name: "RespirationRate",
    description: "RespirationRate",
    unit: "",
    value: "--",
    icon: Image.asset(
      "images/3.png",
      fit: BoxFit.contain,
    ),
  ),

// Heart Rate Sensor
  Sensor(
    id: 4,
    name: "Heart Rate",
    description: "HeartRate",
    unit: "",
    value: "--",
    icon: Image.asset(
      "images/4.png",
      fit: BoxFit.contain,
    ),
  ),

  // temperature Sensor

  // Muscle Activity Sensor
  Sensor(
    id: 6,
    name: "Muscle Activity",
    description: "MuscleActivity",
    unit: "",
    value: "--",
    icon: Image.asset(
      "images/6.png",
      fit: BoxFit.contain,
    ),
  ),

];
