import 'dart:io';
import 'package:flutter/foundation.dart';
import 'package:flutter/material.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:kids/provider.dart';
import 'package:provider/provider.dart';

class HomeScreen extends StatefulWidget {
  const HomeScreen({Key? key}) : super(key: key);

  @override
  State<HomeScreen> createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {

  @override
  Widget build(BuildContext context) {
    return Consumer<HomePageProvider>(
      builder:(context, value, child) => Scaffold(
        body: WillPopScope(
          onWillPop: () => exit(0),
          child: AnimatedSwitcher(
            duration: const Duration(
              milliseconds: 500,
            ),
            child: pages[activeIndex],
          ),
        ),
        bottomNavigationBar: BottomNavigationBar(
          items: navigations,
          onTap: (int index) {
            activeIndex = index;
            if (kDebugMode) {
              print(activeIndex);
            }
            setState(() {});
          },
          currentIndex: activeIndex,
          type: BottomNavigationBarType.shifting,
        ),
      ),
    );
  }
}

