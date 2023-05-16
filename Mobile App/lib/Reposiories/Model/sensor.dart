import 'dart:convert';
import 'package:flutter/material.dart';

class Sensor {
  int id;
  String name;
  String description;
  String unit;
  String value;
  Image icon;

  Sensor({
    required this.id,
    required this.name,
    required this.description,
    required this.unit,
    required this.value,
    required this.icon,
  });

  factory Sensor.fromJson(Map<String, dynamic> json) {
    return Sensor(
      id: json['id'],
      name: json['name'],
      description: json['description'],
      unit: json['unit'],
      value: json['value'],
      icon: json['icon'],
    );
  }

  Map<String, dynamic> toJson() {
    return {
      'id': id,
      'name': name,
      'description': description,
      'unit': unit,
      'value': value,
      'icon': icon,
    };
  }

  // sensor from string json to list
  static List<Sensor> fromJsonList(String jsonString) {
    List<Sensor> sensors = [];
    List<dynamic> jsonList = json.decode(jsonString);
    jsonList.forEach((element) {
      sensors.add(Sensor.fromJson(element));
    });
    return sensors;
  }
}