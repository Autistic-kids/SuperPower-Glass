import 'package:cloud_firestore/cloud_firestore.dart';
import 'package:flutter/material.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:youtube_player_flutter/youtube_player_flutter.dart';

class Level5Page extends StatefulWidget {
  const Level5Page({Key? key}) : super(key: key);

  @override
  State<Level5Page> createState() => _Level4PageState();
}

class _Level4PageState extends State<Level5Page> {
  final YoutubePlayerController _eatingController = YoutubePlayerController(
    initialVideoId: 'TXH-qwmsWm0',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _islmicController = YoutubePlayerController(
    initialVideoId: 'dBx-C6oNs0w',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _ft7aController = YoutubePlayerController(
    initialVideoId: 'KCnCpyXWeKI',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _nasController = YoutubePlayerController(
    initialVideoId: '9epHGxd6pOA',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _fala2Controller = YoutubePlayerController(
    initialVideoId: 'Ma3RDlvt2l4',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _e5lasController = YoutubePlayerController(
    initialVideoId: 'qKGYLfQZuFw',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );

  @override
  Widget build(BuildContext context) {
    return DefaultTabController(
        length: 6,
        child: Scaffold(
          appBar: AppBar(
            title: const Text(
              "Level 4",
            ),
            centerTitle: true,
            automaticallyImplyLeading: false,
            bottom: const TabBar(
              isScrollable: true,
              tabs: [
                Tab(
                  text: "Decency",
                ),
                Tab(
                  text: "Pillars of islam",
                ),
                Tab(
                  text: "Al-Fatiha",
                ),
                Tab(
                  text: "Al-Nas",
                ),
                Tab(
                  text: "Al-Falaq",
                ),
                Tab(
                  text: "Al-Ikhlas",
                ),
              ],
            ),
          ),
          body: TabBarView(
            children: [
              Center(
                child: YoutubePlayer(
                  controller: _eatingController,
                  showVideoProgressIndicator: true,
                  progressIndicatorColor: Colors.amber,
                  onReady: () {
                    _eatingController.play();
                  },
                ),
              ),
              Center(
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  crossAxisAlignment: CrossAxisAlignment.end,
                  children: [
                    const SizedBox(
                      height: 50,),
                    YoutubePlayer(
                      controller: _islmicController,
                      showVideoProgressIndicator: true,
                      progressIndicatorColor: Colors.amber,
                      onReady: () {
                        _islmicController.play();
                      },
                    ),
                    Padding(
                      padding: const EdgeInsets.all(12),
                      child: FloatingActionButton(
                        onPressed: () {
                          FirebaseFirestore.instance.collection("users data").doc(activeUserID).update({
                            "VideoID": "5",
                          });
                          Future.delayed(const Duration(seconds: 7), () {
                            FirebaseFirestore.instance.collection("users data").doc(activeUserID).update({
                              "VideoID": "3",
                            });                        });
                        },
                        child: const Icon(Icons.send_to_mobile),
                      ),
                    ),
                  ],
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _ft7aController,
                  showVideoProgressIndicator: true,
                  progressIndicatorColor: Colors.amber,
                  onReady: () {
                    _ft7aController.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _nasController,
                  showVideoProgressIndicator: true,
                  progressIndicatorColor: Colors.amber,
                  onReady: () {
                    _nasController.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _fala2Controller,
                  showVideoProgressIndicator: true,
                  progressIndicatorColor: Colors.amber,
                  onReady: () {
                    _fala2Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _e5lasController,
                  showVideoProgressIndicator: true,
                  progressIndicatorColor: Colors.amber,
                  onReady: () {
                    _e5lasController.play();
                  },
                ),
              ),
            ],
          ),
        ));
  }
}
